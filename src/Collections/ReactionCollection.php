<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\ReactionModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\ReactionModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class ReactionCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return ReactionModel::class;
    }
}
