<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\TagModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\TagModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class TagCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return TagModel::class;
    }
}
