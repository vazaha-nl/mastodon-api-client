<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Announcement;

use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
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
