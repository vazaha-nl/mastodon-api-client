<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections\Status;

use Vazaha\Mastodon\Collections\ModelCollection;
use Vazaha\Mastodon\Models\Status\MentionModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\Status\MentionModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class MentionCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return MentionModel::class;
    }
}
