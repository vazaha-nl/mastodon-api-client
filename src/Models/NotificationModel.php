<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * @see https://link.to.docs
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
     * The timestamp of the notification.
     */
    public Carbon $created_at;

    /**
     * The account that performed the action that generated the notification.
     */
    public AccountModel $account;

    /**
     * Status that was the object of the notification. Attached when `type` of the
     * notification is `favourite`, `reblog`, `status`, `mention`, `poll`, or
     * `update`.
     */
    public StatusModel $status;

    /**
     * Report that was the object of the notification. Attached when `type` of the
     * notification is `admin.report`.
     */
    public ReportModel $report;
}
