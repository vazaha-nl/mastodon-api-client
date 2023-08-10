<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents the relationship between accounts, such as following / blocking / muting / etc.
 *
 * @see https://docs.joinmastodon.org/entities/Relationship/
 */
class RelationshipModel extends Model
{
    /**
     * The account ID.
     */
    public string $id;

    /**
     * Are you following this user?
     */
    public bool $following;

    /**
     * Are you receiving this user's boosts in your home timeline?
     */
    public bool $showing_reblogs;

    /**
     * Have you enabled notifications for this user?
     */
    public bool $notifying;

    /**
     * Which languages are you following from this user?
     *
     * @var array<string>
     */
    public array $languages;

    /**
     * Are you followed by this user?
     */
    public bool $followed_by;

    /**
     * Are you blocking this user?
     */
    public bool $blocking;

    /**
     * Is this user blocking you?
     */
    public bool $blocked_by;

    /**
     * Are you muting this user?
     */
    public bool $muting;

    /**
     * Are you muting notifications from this user?
     */
    public bool $muting_notifications;

    /**
     * Do you have a pending follow request for this user?
     */
    public bool $requested;

    /**
     * Are you blocking this user's domain?
     */
    public bool $domain_blocking;

    /**
     * Are you featuring this user on your profile?
     */
    public bool $endorsed;

    /**
     * This user's profile bio.
     */
    public string $note;
}
