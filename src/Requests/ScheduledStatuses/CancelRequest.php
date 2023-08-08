<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\ScheduledStatuses;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Cancel a scheduled status.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/scheduled_statuses/#cancel
 */
final class CancelRequest extends \Vazaha\Mastodon\Requests\EmptyOrUnknownRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the ScheduledStatus in the database.
         */
        public string $id,
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
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::DELETE;
    }
}
