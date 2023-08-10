<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\ScheduledStatusModel;
use Vazaha\Mastodon\Requests\ScheduledStatuses\CancelRequest;
use Vazaha\Mastodon\Requests\ScheduledStatuses\GetOneRequest;
use Vazaha\Mastodon\Requests\ScheduledStatuses\GetRequest;
use Vazaha\Mastodon\Requests\ScheduledStatuses\UpdateRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\ScheduledStatusResult;

class ScheduledStatusesProxy extends Proxy
{
    /**
     * Cancel a scheduled status.
     *
     * @param string $id the ID of the ScheduledStatus in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/scheduled_statuses/#cancel
     */
    public function cancel(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new CancelRequest(
                $id,
            ));

        return $models;
    }

    /**
     * View scheduled statuses.
     *
     * @param ?string $max_id   return results older than ID
     * @param ?string $since_id return results newer than ID
     * @param ?string $min_id   return results immediately newer than ID
     * @param ?int    $limit    Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @return \Vazaha\Mastodon\Results\ScheduledStatusResult<array-key,\Vazaha\Mastodon\Models\ScheduledStatusModel>
     *
     * @see https://docs.joinmastodon.org/methods/scheduled_statuses/#get
     */
    public function get(
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): ScheduledStatusResult {
        /** @var \Vazaha\Mastodon\Results\ScheduledStatusResult<array-key,\Vazaha\Mastodon\Models\ScheduledStatusModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }

    /**
     * View a single scheduled status.
     *
     * @param string $id the ID of the ScheduledStatus in the database
     *
     * @see https://docs.joinmastodon.org/methods/scheduled_statuses/#get-one
     */
    public function getOne(
        string $id,
    ): ScheduledStatusModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\ScheduledStatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Update a scheduled status's publishing date.
     *
     * @param string  $id           the ID of the ScheduledStatus in the database
     * @param ?string $scheduled_at ISO 8601 Datetime at which the status will be published. Must be at least 5 minutes into the future.
     *
     * @see https://docs.joinmastodon.org/methods/scheduled_statuses/#update
     */
    public function update(
        string $id,
        ?string $scheduled_at = null,
    ): ScheduledStatusModel {
        $result = $this->apiClient->send(new UpdateRequest(
            $id,
            $scheduled_at,
        ));

        /** @var null|\Vazaha\Mastodon\Models\ScheduledStatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
