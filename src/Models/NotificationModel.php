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
     * notification is `favourite`, `reblog`, `status`, `mention`, `poll`,
     * `update`, `quote` or `quoted_update`. In the case of `quoted_update`, your
     * quote of the edited status is attached, not the status that was edited.
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

    /**
     * Fallback information available for some notification types that clients may
     * not support. Only available for some notification types, and only if the
     * `supported_types` parameter is used when querying.
     */
    public ?NotificationFallbackModel $fallback = null;

    /**
     * Collection that was the object of the notification. Attached when `type` of
     * the notification is `added_to_collection` or `collection_update`.
     */
    public ?CollectionModel $collection = null;
}
