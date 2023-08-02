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
        $className = static::getPropertyClassName($property);

        if ($className === null) {
            return $value;
        }

        if (is_array($value) && is_a($className, self::class, true)) {
            return $className::fromArray($value);
        }

        if (is_array($value) && is_a($className, ModelCollection::class, true)) {
            return $className::fromArray($value);
        }

        if (is_a($className, DateTimeInterface::class, true)) {
            if (is_int($value) || is_float($value)) {
                return Carbon::createFromTimestamp($value);
            }

            if (is_string($value)) {
                return Carbon::parse($value);
            }
        }

        return $value;
    }

    protected static function getPropertyClassName(string $property): ?string
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
