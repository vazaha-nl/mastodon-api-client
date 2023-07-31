<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\RuleModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\RuleModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class RuleCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return RuleModel::class;
    }
}
