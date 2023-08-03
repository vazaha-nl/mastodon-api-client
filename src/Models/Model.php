<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;
use DateTimeInterface;
use ReflectionClass;
use ReflectionNamedType;
use Vazaha\Mastodon\Collections\ModelCollection;
use Vazaha\Mastodon\Interfaces\ModelInterface;

abstract class Model implements ModelInterface
{
    final public function __construct()
    {
    }

    /**
     * @param array<string, mixed> $array
     */
    public static function fromArray(array $array): static
    {
        $model = new static();

        foreach ($array as $property => $value) {
            if ($value === null) {
                continue;
            }

            $property = str_replace(':', '_', $property);

            if (!property_exists($model, $property)) {
                // do not bork on this!
                continue;
            }

            $model->{$property} = static::resolvePropertyValue($property, $value);
        }

        return $model;
    }

    /**
     * @return array<string, mixed> *
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }

    /**
     * @param mixed $value
     *
     * @throws \ReflectionException
     *
     * @return mixed
     */
    protected static function resolvePropertyValue(string $property, $value)
    {
        $type = static::getPropertyType($property);

        if ($type === null) {
            return $value;
        }

        if ($type === 'int' && is_string($value) && is_numeric($value)) {
            return (int) $value;
        }

        if ($type === 'string' && is_int($value)) {
            return (string) $value;
        }

        if (is_array($value) && is_a($type, self::class, true)) {
            return $type::fromArray($value);
        }

        if (is_array($value) && is_a($type, ModelCollection::class, true)) {
            return $type::fromArray($value);
        }

        if (is_a($type, DateTimeInterface::class, true)) {
            if (is_int($value) || is_float($value)) {
                return Carbon::createFromTimestamp($value);
            }

            if (is_string($value)) {
                return Carbon::parse($value);
            }
        }

        return $value;
    }

    protected static function getPropertyType(string $property): ?string
    {
        $reflectionClass = new ReflectionClass(static::class);
        $reflectionProperty = $reflectionClass->getProperty($property);
        $reflectionType = $reflectionProperty->getType();

        if (!$reflectionType instanceof ReflectionNamedType) {
            return null;
        }

        return $reflectionType->getName();
    }
}
