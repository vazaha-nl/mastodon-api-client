<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Requests\NotificationsAlpha\DismissGroupRequest;
use Vazaha\Mastodon\Requests\NotificationsAlpha\GetGroupedRequest;
use Vazaha\Mastodon\Requests\NotificationsAlpha\GetNotificationGroupRequest;
use Vazaha\Mastodon\Requests\NotificationsAlpha\UnreadGroupCountRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class NotificationsAlphaProxy extends Proxy
{
    /**
     * Dismiss a single notification group.
     *
     * @param string $group_key the group key of the notifications to discard
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications_alpha/#dismiss-group
     */
    public function dismissGroup(
        string $group_key,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DismissGroupRequest(
                $group_key,
            ));

        return $models;
    }

    /**
     * Get all grouped notifications.
     *
     * @param ?string           $max_id          All results returned will be about notifications strictly older than this notification ID. In effect, sets an upper bound on results.
     * @param ?string           $since_id        All results returned will be about notifications strictly newer than this notification ID. In effect, sets a lower bound on results.
     * @param ?string           $min_id          Returns results about notifications immediately newer than this notification ID. In effect, sets a cursor at this ID and paginates forward.
     * @param ?int              $limit           Maximum number of results to return. Defaults to 40 notifications. Max 80 notification groups.
     * @param null|list<string> $types           types to include in the result
     * @param null|list<string> $exclude_types   types to exclude from the results
     * @param ?string           $account_id      return only notifications received from the specified account
     * @param ?string           $expand_accounts One of `full` (default) or `partial_avatars`. When set to `partial_avatars`, some accounts will not be rendered in full in the returned `accounts` list but will be instead returned in stripped-down form in the `partial_accounts` list. The most recent account in a notification group is always rendered in full in the `accounts` attribute.
     * @param null|list<string> $grouped_types   Restrict which notification types can be grouped. Use this if there are notification types for which your client does not support grouping. If omitted, the server will group notifications of all types it supports (currently, `favourite` and `reblog`). If you do not want any notification grouping, use {@link https://docs.joinmastodon.org/methods/notifications#get GET `/api/v1/notifications`} instead.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications_alpha/#get-grouped
     */
    public function getGrouped(
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
        ?array $types = null,
        ?array $exclude_types = null,
        ?string $account_id = null,
        ?string $expand_accounts = null,
        ?array $grouped_types = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new GetGroupedRequest(
                $max_id,
                $since_id,
                $min_id,
                $limit,
                $types,
                $exclude_types,
                $account_id,
                $expand_accounts,
                $grouped_types,
            ));

        return $models;
    }

    /**
     * Get a single notification group.
     *
     * @param string $group_key the group key of the notification group
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications_alpha/#get-notification-group
     */
    public function getNotificationGroup(
        string $group_key,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new GetNotificationGroupRequest(
                $group_key,
            ));

        return $models;
    }

    /**
     * Get the number of unread notifications.
     *
     * @param ?int              $limit         Maximum number of results to return. Defaults to 100 notifications. Max 1000 notifications.
     * @param null|list<string> $types         types of notifications that should count towards unread notifications
     * @param null|list<string> $exclude_types types of notifications that should not count towards unread notifications
     * @param ?string           $account_id    only count unread notifications received from the specified account
     * @param null|list<string> $grouped_types Restrict which notification types can be grouped. Use this if there are notification types for which your client does not support grouping. If omitted, the server will group notifications of all types it supports (currently, `favourite` and `reblog`). If you do not want any notification grouping, use {@link https://docs.joinmastodon.org/methods/notifications#unread-count GET `/api/v1/notifications/unread_count`} instead.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications_alpha/#unread-group-count
     */
    public function unreadGroupCount(
        ?int $limit = null,
        ?array $types = null,
        ?array $exclude_types = null,
        ?string $account_id = null,
        ?array $grouped_types = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new UnreadGroupCountRequest(
                $limit,
                $types,
                $exclude_types,
                $account_id,
                $grouped_types,
            ));

        return $models;
    }
}
