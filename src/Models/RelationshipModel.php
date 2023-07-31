<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
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
     * Are you receiving this user&#039;s boosts in your home timeline?
     */
    public bool $showing_reblogs;

    /**
     * Have you enabled notifications for this user?
     */
    public bool $notifying;

    /**
     * Which languages are you following from this user?
     */
    public string $languages;

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
     * Are you blocking this user&#039;s domain?
     */
    public bool $domain_blocking;

    /**
     * Are you featuring this user on your profile?
     */
    public bool $endorsed;

    /**
     * This user&#039;s profile bio.
     */
    public string $note;
}
