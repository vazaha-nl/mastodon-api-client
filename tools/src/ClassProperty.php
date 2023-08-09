<?php

declare(strict_types=1);

namespace Tools;

use DateTimeInterface;
use Illuminate\Support\Str;
use Tools\Enums\ClassType;

class ClassProperty
{
    protected const TYPE_LOOKUP = [
        'integer' => 'int',
        'number' => 'int',
        'float' => 'float',
        'string' => 'string',
        'boolean' => 'bool',
        'hash' => 'array',
        'array' => 'array',
        'object' => 'array',
        'array of string' => 'array',
    ];

    public string $name;

    public ClassName|string $type;

    public bool $nullable;

    public ?string $default;

    public string $description;

    public array $descriptionLines;

    public ?string $typeHint = null;

    public bool $show = true;

    public static function fromArray(array $array): static
    {
        // print_r($array);
        $property = new static();
        $property->name = $array['name'];
        $property->name = str_replace(':', '_', $property->name);
        $property->name = str_replace('[]', '', $property->name);

        if (!preg_match('/^[A-Za-z0-9_]*$/', $property->name)) {
            $property->show = false;
        }

        $property->nullable = (bool) $array['nullable'];

        if (isset($array['required'])) {
            $property->nullable = !$array['required'];
        }

        $property->description = $array['description'];
        $property->descriptionLines = explode(
            "\n",
            wordwrap($array['description'] ?? ''),
        );

        $property->resolveTypeFromRaw($array['type'] ?? 'string');

        // TODO move to resolve... fn
        if ($property->type === 'array') {
            // for phpstan....?
            $property->typeHint ??= ($property->nullable ? 'null|' : '') . 'mixed[]';
        }

        return $property;
    }

    protected function resolveTypeFromRaw(string $type): void
    {
        if (isset(self::TYPE_LOOKUP[$type])) {
            $this->type = self::TYPE_LOOKUP[$type];

            return;
        }

        if (Str::startsWith($type, 'string ')) {
            $this->type = 'string';

            return;
        }

        if ($type === 'datetime' || $type === 'timestamp') {
            $this->type = new ClassName(DateTimeInterface::class);

            return;
        }

        if (preg_match('/array\<(.*)\>/', $type, $matches)) {
            $subType = $matches[1];

            // TODO set correct typehint
            if (preg_match('/string/i', $subType)) {
                $this->type = 'array';
                $this->typeHint = ($this->nullable ? 'null|' : '') . 'array<string>';
                $this->default = $this->nullable ? 'null' : '[]';

                return;
            }

            if (preg_match('/array|hash/i', $subType)) {
                $this->type = 'array';
                $this->typeHint = ($this->nullable ? 'null|' : '') . 'array<mixed>';
                $this->default = $this->nullable ? 'null' : '[]';

                return;
            }

            if (preg_match('/integer/i', $subType)) {
                $this->type = 'array';
                $this->typeHint = ($this->nullable ? 'null|' : '') . 'array<int>';
                $this->default = $this->nullable ? 'null' : '[]';

                return;
            }

            $entity = new Entity($subType);

            $this->type = ClassName::fromEntity($entity, ClassType::COLLECTION);

            return;
        }

        $entity = new Entity($type);

        $this->type = ClassName::fromEntity($entity, ClassType::MODEL);
    }
}
