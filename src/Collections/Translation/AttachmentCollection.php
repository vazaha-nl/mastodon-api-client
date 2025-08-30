<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections\Translation;

use Vazaha\Mastodon\Abstracts\ModelCollection;
use Vazaha\Mastodon\Models\Translation\AttachmentModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\Translation\AttachmentModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class AttachmentCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return AttachmentModel::class;
    }
}
