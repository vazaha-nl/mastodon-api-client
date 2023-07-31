<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\FieldModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\FieldModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class FieldCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return FieldModel::class;
    }
}
