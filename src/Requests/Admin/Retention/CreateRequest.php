<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Retention;

use DateTimeInterface;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Calculate retention data.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\CohortResult>
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\Admin\CohortRequest implements RequestInterface
{
    public function __construct(
        /**
         * The start date for the time period. If a time is provided, it will be
         * ignored.
         */
        public DateTimeInterface $start_at,

        /**
         * The end date for the time period. If a time is provided, it will be
         * ignored.
         */
        public DateTimeInterface $end_at,

        /**
         * Specify whether to use `day` or `month` buckets. If any other value is
         * provided, defaults to `day`.
         */
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
}