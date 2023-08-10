<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\ScheduledStatuses;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ScheduledStatusResult;

/**
 * Update a scheduled status's publishing date.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ScheduledStatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/scheduled_statuses/#update
 */
final class UpdateRequest extends Request implements RequestInterface
{
    /**
     * @param string  $id           the ID of the ScheduledStatus in the database
     * @param ?string $scheduled_at ISO 8601 Datetime at which the status will be published. Must be at least 5 minutes into the future.
     */
    public function __construct(
        public string $id,
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

    public function getResultClass(): string
    {
        return ScheduledStatusResult::class;
    }
}
