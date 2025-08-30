<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\V1;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents the notification filtering policy of the user.
 *
 * @see https://docs.joinmastodon.org/entities/V1_NotificationPolicy/
 */
class NotificationPolicyModel extends Model
{
    /**
     * Whether to filter notifications from accounts the user is not following.
     */
    public bool $filter_not_following;

    /**
     * Whether to filter notifications from accounts that are not following the
     * user.
     */
    public bool $filter_not_followers;

    /**
     * Whether to filter notifications from accounts created in the past 30 days.
     */
    public bool $filter_new_accounts;

    /**
     * Whether to filter notifications from private mentions. Replies to private
     * mentions initiated by the user, as well as accounts the user follows, are
     * never filtered.
     */
    public bool $filter_private_mentions;

    /**
     * Summary of the filtered notifications.
     *
     * @var array<array-key, mixed>
     */
    public array $summary;
}
