<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Collections\AccountCollection;

/**
 * Represents a subset of your follows who also follow some other user.
 *
 * @see https://docs.joinmastodon.org/entities/FamiliarFollowers/
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
