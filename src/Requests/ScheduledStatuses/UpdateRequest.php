<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\ScheduledStatuses;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Update a scheduled status&#039;s publishing date.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ScheduledStatusResult>
 */
final class UpdateRequest extends \Vazaha\Mastodon\Requests\ScheduledStatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the ScheduledStatus in the database.
         */
        public string $id,

        /**
         * ISO 8601 Datetime at which the status will be published. Must be at least 5
         * minutes into the future.
         */
        public ?string $scheduled_at = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/scheduled_statuses/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'scheduled_at' => $this->scheduled_at,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
