<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections\Announcement;

use Vazaha\Mastodon\Collections\ModelCollection;
use Vazaha\Mastodon\Models\Announcement\StatusModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\Announcement\StatusModel
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
