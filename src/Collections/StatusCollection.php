<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\StatusModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\StatusModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class StatusCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return StatusModel::class;
    }
}
