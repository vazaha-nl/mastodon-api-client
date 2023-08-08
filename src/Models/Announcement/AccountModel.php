<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Announcement;

use Vazaha\Mastodon\Models\Model;

/**
 * Represents an announcement set by an administrator.
 *
 * @see https://docs.joinmastodon.org/entities/Announcement/#Account
 */
class AccountModel extends Model
{
    /**
     * The account ID of the mentioned user.
     */
    public string $id;

    /**
     * The username of the mentioned user.
     */
    public string $username;

    /**
     * The location of the mentioned user&#039;s profile.
     */
    public string $url;

    /**
     * The webfinger acct: URI of the mentioned user. Equivalent to `username` for
     * local users, or `username@domain` for remote users.
     */
    public string $acct;
}
