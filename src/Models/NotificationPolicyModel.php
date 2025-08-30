<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents the notification filtering policy of the user.
 *
 * @see https://docs.joinmastodon.org/entities/NotificationPolicy/
 */
class NotificationPolicyModel extends Model
{
    /**
     * Whether to `accept`, `filter` or `drop` notifications from accounts the
     * user is not following. `drop` will prevent creation of the notification
     * object altogether (without preventing the underlying activity), `filter`
     * will cause it to be marked as filtered, and `accept` will not affect its
     * processing.
     */
    public string $for_not_following;

    /**
     * Whether to `accept`, `filter` or `drop` notifications from accounts that
     * are not following the user. `drop` will prevent creation of the
     * notification object altogether (without preventing the underlying
     * activity), `filter` will cause it to be marked as filtered, and `accept`
     * will not affect its processing.
     */
    public string $for_not_followers;

    /**
     * Whether to `accept`, `filter` or `drop` notifications from accounts created
     * in the past 30 days. `drop` will prevent creation of the notification
     * object altogether (without preventing the underlying activity), `filter`
     * will cause it to be marked as filtered, and `accept` will not affect its
     * processing.
     */
    public string $for_new_accounts;

    /**
     * Whether to `accept`, `filter` or `drop` notifications from private
     * mentions. `drop` will prevent creation of the notification object
     * altogether (without preventing the underlying activity), `filter` will
     * cause it to be marked as filtered, and `accept` will not affect its
     * processing. Replies to private mentions initiated by the user, as well as
     * accounts the user follows, are always allowed, regardless of this value.
     */
    public string $for_private_mentions;

    /**
     * Whether to `accept`, `filter` or `drop` notifications from accounts that
     * were limited by a moderator. `drop` will prevent creation of the
     * notification object altogether (without preventing the underlying
     * activity), `filter` will cause it to be marked as filtered, and `accept`
     * will not affect its processing.
     */
    public string $for_limited_accounts;

    /**
     * Summary of the filtered notifications.
     *
     * @var array<array-key, mixed>
     */
    public array $summary;
}
