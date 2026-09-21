<?php

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Abstracts\ModelCollection;
use Vazaha\Mastodon\Models\CollectionItemModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\CollectionItemModel
 * @extends ModelCollection<TKey, TModel>
 */
class CollectionItemCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return CollectionItemModel::class;
    }
}
