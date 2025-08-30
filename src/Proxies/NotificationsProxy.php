<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\NotificationModel;
use Vazaha\Mastodon\Models\NotificationPolicyModel;
use Vazaha\Mastodon\Models\NotificationRequestModel;
use Vazaha\Mastodon\Requests\Notifications\AcceptMultipleRequestsRequest;
use Vazaha\Mastodon\Requests\Notifications\AcceptRequestRequest;
use Vazaha\Mastodon\Requests\Notifications\ClearRequest;
use Vazaha\Mastodon\Requests\Notifications\DismissDeprecatedRequest;
use Vazaha\Mastodon\Requests\Notifications\DismissMultipleRequestsRequest;
use Vazaha\Mastodon\Requests\Notifications\DismissRequest;
use Vazaha\Mastodon\Requests\Notifications\DismissRequestRequest;
use Vazaha\Mastodon\Requests\Notifications\GetOneRequest;
use Vazaha\Mastodon\Requests\Notifications\GetOneRequestRequest;
use Vazaha\Mastodon\Requests\Notifications\GetPolicyRequest;
use Vazaha\Mastodon\Requests\Notifications\GetRequest;
use Vazaha\Mastodon\Requests\Notifications\GetRequestsRequest;
use Vazaha\Mastodon\Requests\Notifications\RequestsMergedRequest;
use Vazaha\Mastodon\Requests\Notifications\UnreadCountRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\NotificationRequestResult;
use Vazaha\Mastodon\Results\NotificationResult;

class NotificationsProxy extends Proxy
{
    /**
     * Accept multiple notification requests.
     *
     * @param string $id the ID of the Notification in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#accept-multiple-requests
     */
    public function acceptMultipleRequests(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new AcceptMultipleRequestsRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Accept a single notification request.
     *
     * @param string $id the ID of the Notification in the database
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#accept-request
     */
    public function acceptRequest(
        string $id,
    ): NotificationRequestModel {
        $result = $this->apiClient->send(new AcceptRequestRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\NotificationRequestModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Dismiss all notifications.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#clear
     */
    public function clear(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new ClearRequest(
            ));

        return $models;
    }

    /**
     * Dismiss a single notification.
     *
     * @param string $id the ID of the Notification in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#dismiss
     */
    public function dismiss(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DismissRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Dismiss a single notification.
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#dismiss-deprecated
     *
     * @deprecated
     *
     * @param string $id the ID of the notification in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function dismissDeprecated(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DismissDeprecatedRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Dismiss multiple notification requests.
     *
     * @param list<string> $_id the IDs of the notification requests in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#dismiss-multiple-requests
     */
    public function dismissMultipleRequests(
        array $_id = [],
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DismissMultipleRequestsRequest(
                $_id,
            ));

        return $models;
    }

    /**
     * Dismiss a single notification request.
     *
     * @param string $id the ID of the Notification in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#dismiss-request
     */
    public function dismissRequest(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DismissRequestRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Get all notifications.
     *
     * @param ?string           $max_id           All results returned will be lesser than this ID. In effect, sets an upper bound on results.
     * @param ?string           $since_id         All results returned will be greater than this ID. In effect, sets a lower bound on results.
     * @param ?string           $min_id           Returns results immediately newer than this ID. In effect, sets a cursor at this ID and paginates forward.
     * @param ?int              $limit            Maximum number of results to return. Defaults to 40 notifications. Max 80 notifications.
     * @param null|list<string> $types            types to include in the result
     * @param null|list<string> $exclude_types    types to exclude from the results
     * @param ?string           $account_id       return only notifications received from the specified account
     * @param ?bool             $include_filtered Whether to include notifications filtered by the user's {@link https://docs.joinmastodon.org/entities/NotificationPolicy NotificationPolicy}. Defaults to false.
     *
     * @return \Vazaha\Mastodon\Results\NotificationResult<array-key, \Vazaha\Mastodon\Models\NotificationModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#get
     */
    public function get(
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
        ?array $types = null,
        ?array $exclude_types = null,
        ?string $account_id = null,
        ?bool $include_filtered = null,
    ): NotificationResult {
        /** @var \Vazaha\Mastodon\Results\NotificationResult<array-key, \Vazaha\Mastodon\Models\NotificationModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $max_id,
                $since_id,
                $min_id,
                $limit,
                $types,
                $exclude_types,
                $account_id,
                $include_filtered,
            ));

        return $models;
    }

    /**
     * Get a single notification.
     *
     * @param string $id the ID of the Notification in the database
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#get-one
     */
    public function getOne(
        string $id,
    ): NotificationModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\NotificationModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get a single notification request.
     *
     * @param ?string $max_id   All results returned will be lesser than this ID. In effect, sets an upper bound on results.
     * @param ?string $since_id All results returned will be greater than this ID. In effect, sets a lower bound on results.
     * @param ?string $min_id   Returns results immediately newer than this ID. In effect, sets a cursor at this ID and paginates forward.
     * @param ?int    $limit    Maximum number of results to return. Defaults to 40 notification requests. Max 80 notification requests.
     *
     * @return \Vazaha\Mastodon\Results\NotificationRequestResult<array-key, \Vazaha\Mastodon\Models\NotificationRequestModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#get-one-request
     */
    public function getOneRequest(
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): NotificationRequestResult {
        /** @var \Vazaha\Mastodon\Results\NotificationRequestResult<array-key, \Vazaha\Mastodon\Models\NotificationRequestModel> */
        $models = $this->apiClient
            ->send(new GetOneRequestRequest(
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }

    /**
     * Get the filtering policy for notifications.
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#get-policy
     */
    public function getPolicy(
    ): NotificationPolicyModel {
        $result = $this->apiClient->send(new GetPolicyRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\NotificationPolicyModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get all notification requests.
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#get-requests
     */
    public function getRequests(
    ): NotificationPolicyModel {
        $result = $this->apiClient->send(new GetRequestsRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\NotificationPolicyModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Check if accepted notification requests have been merged.
     *
     * @param list<string> $_id the IDs of the notification requests in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#requests-merged
     */
    public function requestsMerged(
        array $_id = [],
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new RequestsMergedRequest(
                $_id,
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
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#unread-count
     */
    public function unreadCount(
        ?int $limit = null,
        ?array $types = null,
        ?array $exclude_types = null,
        ?string $account_id = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new UnreadCountRequest(
                $limit,
                $types,
                $exclude_types,
                $account_id,
            ));

        return $models;
    }
}
