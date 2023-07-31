<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\MediaAttachmentModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\MediaAttachmentModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class MediaAttachmentCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return MediaAttachmentModel::class;
    }
}
