<?php

declare(strict_types=1);

namespace Tools;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Tools\Enums\ClassType;

class ClassProperty
{
    protected const TYPE_LOOKUP = [
        'integer' => 'int',
        'number' => 'int',
        'string' => 'string',
        'boolean' => 'bool',
        'hash' => 'array',
        'array' => 'array',
        'object' => 'array',
        'array of string' => 'array',
        // 'datetime' => Carbon::class,
    ];

    public string $name;

    public ClassName|string $type;

    public bool $nullable;

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
        $property->descriptionLines = explode(
            "\n",
            wordwrap($array['description'] ?? ''),
        );

        $property->type = self::resolveType($array['type'] ?? 'string');

        if ($property->type === 'array') {
            // for phpstan....?
            $property->typeHint = 'mixed[]';
        }

        return $property;
    }

    protected static function resolveType(string $type): ClassName|string
    {
        if (isset(self::TYPE_LOOKUP[$type])) {
            return self::TYPE_LOOKUP[$type];
        }

        if (Str::contains($type, 'array of ')) {
            return 'array';
        }

        if (Str::startsWith($type, 'string ')) {
            return 'string';
        }

        if ($type === 'datetime' || $type === 'timestamp') {
            return new ClassName(Carbon::class);
        }

        if (preg_match('/array\<(.*)\>/', $type, $matches)) {
            $entityName = $matches[1];
            $entity = new Entity($entityName);

            return ClassName::fromEntity($entity, ClassType::COLLECTION);
        }

        $entity = new Entity($type);

        return ClassName::fromEntity($entity, ClassType::MODEL);
    }
}
