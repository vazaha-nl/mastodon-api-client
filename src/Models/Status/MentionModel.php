<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Status;

use Vazaha\Mastodon\Models\Model;

/**
 * Represents a status posted by an account.
 *
 * @see https://docs.joinmastodon.org/entities/Status/#Mention
 */
class MentionModel extends Model
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
     * The location of the mentioned user's profile.
     */
    public string $url;

    /**
     * The webfinger acct: URI of the mentioned user. Equivalent to `username` for
     * local users, or `username@domain` for remote users.
     */
    public string $acct;
}
