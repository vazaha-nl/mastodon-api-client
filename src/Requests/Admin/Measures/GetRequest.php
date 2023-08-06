<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Measures;

use DateTimeInterface;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Get measurable data.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\MeasureResult>
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\Admin\MeasureRequest implements RequestInterface
{
    public function __construct(
        /**
         * Request specific measures by their keystring. Supported measures include:.
         *
         * @var array<string> $keys
         */
        public array $keys,

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
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/measures';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'keys' => $this->keys,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
