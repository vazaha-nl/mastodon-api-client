<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Abstracts\ModelCollection;
use Vazaha\Mastodon\Models\AccountRoleModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\AccountRoleModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class AccountRoleCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return AccountRoleModel::class;
    }
}
