<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Abstracts;

use Illuminate\Support\Collection;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Abstracts\Model
 *
 * @extends Collection<TKey, TModel>
 */
abstract class ModelCollection extends Collection
{
    /**
     * @return class-string<\Vazaha\Mastodon\Abstracts\Model>
     */
    abstract public static function getModelClass(): string;

    /**
     * @param list<array<string, mixed>> $array
     */
    public static function fromArray(array $array): static
    {
        $modelClass = static::getModelClass();

        $models = array_map(
            static fn (array $modelData): Model => $modelClass::fromArray($modelData),
            $array,
        );

        /** @var static $collection */
        $collection = static::make($models);

        return $collection;
    }
}
