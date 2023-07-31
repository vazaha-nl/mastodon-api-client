<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections\Admin;

use Vazaha\Mastodon\Collections\ModelCollection;
use Vazaha\Mastodon\Models\Admin\IpModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\Admin\IpModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class IpCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return IpModel::class;
    }
}
