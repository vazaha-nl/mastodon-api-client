<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\StatusTagModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\StatusTagModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class StatusTagCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return StatusTagModel::class;
    }
}
