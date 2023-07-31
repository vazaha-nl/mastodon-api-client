<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\FilterStatusModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\FilterStatusModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class FilterStatusCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return FilterStatusModel::class;
    }
}
