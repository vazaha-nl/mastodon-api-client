<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\FilterResultModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\FilterResultModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class FilterResultCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return FilterResultModel::class;
    }
}
