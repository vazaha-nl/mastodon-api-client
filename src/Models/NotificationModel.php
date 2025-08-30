<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a notification of an event relevant to the user.
 *
 * @see https://docs.joinmastodon.org/entities/Notification/
 */
class NotificationModel extends Model
{
    /**
     * The id of the notification in the database.
     */
    public string $id;

    /**
     * The type of event that resulted in the notification.
     */
    public string $type;

    /**
     * Group key shared by similar notifications, to be used in the grouped
     * notifications feature. Should be considered opaque, but ungrouped
     * notifications can be assumed to have a `group_key` of the form
     * `ungrouped-{notification_id}`.
     */
    public string $group_key;

    /**
     * The timestamp of the notification.
     */
    public \DateTimeInterface $created_at;

    /**
     * The account that performed the action that generated the notification.
     */
    public AccountModel $account;

    /**
     * Status that was the object of the notification. Attached when `type` of the
     * notification is `favourite`, `reblog`, `status`, `mention`, `poll`, or
     * `update`.
     */
    public ?StatusModel $status = null;

    /**
     * Report that was the object of the notification. Attached when `type` of the
     * notification is `admin.report`.
     */
    public ?ReportModel $report = null;

    /**
     * Summary of the event that caused follow relationships to be severed.
     * Attached when `type` of the notification is `severed_relationships`.
     */
    public ?RelationshipSeveranceEventModel $event = null;

    /**
     * Moderation warning that caused the notification. Attached when `type` of
     * the notification is `moderation_warning`.
     */
    public ?AccountWarningModel $moderation_warning = null;
}
