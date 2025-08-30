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
 * View scheduled statuses.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ScheduledStatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/scheduled_statuses/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param ?string $max_id   All results returned will be lesser than this ID. In effect, sets an upper bound on results.
     * @param ?string $since_id All results returned will be greater than this ID. In effect, sets a lower bound on results.
     * @param ?string $min_id   Returns results immediately newer than this ID. In effect, sets a cursor at this ID and paginates forward.
     * @param ?int    $limit    Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @see https://docs.joinmastodon.org/methods/scheduled_statuses/#get
     */
    public function __construct(
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/scheduled_statuses';
    }

    public function getQueryParams(): array
    {
        return [
            'max_id' => $this->max_id,
            'since_id' => $this->since_id,
            'min_id' => $this->min_id,
            'limit' => $this->limit,
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return ScheduledStatusResult::class;
    }
}
