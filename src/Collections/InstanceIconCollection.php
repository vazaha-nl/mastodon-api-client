<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Abstracts\ModelCollection;
use Vazaha\Mastodon\Models\InstanceIconModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\InstanceIconModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class InstanceIconCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return InstanceIconModel::class;
    }
}
