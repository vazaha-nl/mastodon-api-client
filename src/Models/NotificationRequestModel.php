<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a group of filtered notifications from a specific user.
 *
 * @see https://docs.joinmastodon.org/entities/NotificationRequest/
 */
class NotificationRequestModel extends Model
{
    /**
     * The id of the notification request in the database.
     */
    public string $id;

    /**
     * The timestamp of the notification request, i.e. when the first filtered
     * notification from that user was created.
     */
    public \DateTimeInterface $created_at;

    /**
     * The timestamp of when the notification request was last updated.
     */
    public \DateTimeInterface $updated_at;

    /**
     * The account that performed the action that generated the filtered
     * notifications.
     */
    public AccountModel $account;

    /**
     * How many of this account's notifications were filtered.
     */
    public string $notifications_count;

    /**
     * Most recent status associated with a filtered notification from that
     * account.
     */
    public ?StatusModel $last_status = null;
}
