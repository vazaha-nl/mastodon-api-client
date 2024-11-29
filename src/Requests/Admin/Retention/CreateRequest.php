<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Retention;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\Admin\CohortResult;

/**
 * Calculate retention data.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\CohortResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/retention/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param \DateTimeInterface $start_at  The start date for the time period. If a time is provided, it will be ignored.
     * @param \DateTimeInterface $end_at    The end date for the time period. If a time is provided, it will be ignored.
     * @param string             $frequency Specify whether to use `day` or `month` buckets. If any other value is provided, defaults to `day`.
     */
    public function __construct(
        public \DateTimeInterface $start_at,
        public \DateTimeInterface $end_at,
        public string $frequency,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/retention';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
            'frequency' => $this->frequency,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return CohortResult::class;
    }
}
