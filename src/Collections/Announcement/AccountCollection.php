<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections\Announcement;

use Vazaha\Mastodon\Collections\ModelCollection;
use Vazaha\Mastodon\Models\Announcement\AccountModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\Announcement\AccountModel
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
