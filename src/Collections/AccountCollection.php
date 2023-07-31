<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\AccountModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\AccountModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class AccountCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return AccountModel::class;
    }
}
