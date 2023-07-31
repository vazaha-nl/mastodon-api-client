<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections\Status;

use Vazaha\Mastodon\Collections\ModelCollection;
use Vazaha\Mastodon\Models\Status\TagModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\Status\TagModel
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
