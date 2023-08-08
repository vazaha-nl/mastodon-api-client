<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Models\NotificationModel;
use Vazaha\Mastodon\Requests\Notifications\ClearRequest;
use Vazaha\Mastodon\Requests\Notifications\DismissDeprecatedRequest;
use Vazaha\Mastodon\Requests\Notifications\DismissRequest;
use Vazaha\Mastodon\Requests\Notifications\GetOneRequest;
use Vazaha\Mastodon\Requests\Notifications\GetRequest;
use Vazaha\Mastodon\Results\NotificationResult;

class NotificationsProxy extends Proxy
{
    /**
     * Dismiss all notifications.
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#clear
     */
    public function clear(
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new ClearRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Dismiss a single notification.
     *
     * @param string $id the ID of the Notification in the database
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#dismiss
     */
    public function dismiss(
        string $id,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new DismissRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * (REMOVED) Dismiss a single notification.
     *
     * @param string $id the ID of the notification in the database
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#dismiss-deprecated
     */
    public function dismissDeprecated(
        string $id,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new DismissDeprecatedRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get all notifications.
     *
     * @param ?string            $max_id        Return results older than this ID
     * @param ?string            $since_id      Return results newer than this ID
     * @param ?string            $min_id        Return results immediately newer than this ID
     * @param ?int               $limit         Maximum number of results to return. Defaults to 15 notifications. Max 30 notifications.
     * @param null|array<string> $types         types to include in the result
     * @param null|array<string> $exclude_types types to exclude from the results
     * @param ?string            $account_id    return only notifications received from the specified account
     *
     * @return \Vazaha\Mastodon\Results\NotificationResult<array-key,\Vazaha\Mastodon\Models\NotificationModel>
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
    ): NotificationResult {
        /** @var \Vazaha\Mastodon\Results\NotificationResult<array-key,\Vazaha\Mastodon\Models\NotificationModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $max_id,
                $since_id,
                $min_id,
                $limit,
                $types,
                $exclude_types,
                $account_id,
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
}
