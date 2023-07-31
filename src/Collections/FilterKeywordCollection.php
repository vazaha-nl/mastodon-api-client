<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\FilterKeywordModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\FilterKeywordModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class FilterKeywordCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return FilterKeywordModel::class;
    }
}
