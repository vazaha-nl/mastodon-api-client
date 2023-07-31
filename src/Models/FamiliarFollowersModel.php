<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Collections\AccountCollection;

/**
 * @see https://link.to.docs
 */
class FamiliarFollowersModel extends Model
{
    /**
     * The ID of the Account in the database.
     */
    public string $id;

    /**
     * Accounts you follow that also follow this account.
     */
    public AccountCollection $accounts;
}
