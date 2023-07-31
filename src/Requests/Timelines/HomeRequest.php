<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Timelines;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View home timeline.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 */
final class HomeRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * Return results older than ID.
         */
        public ?string $max_id = null,

        /**
         * Return results newer than ID.
         */
        public ?string $since_id = null,

        /**
         * Return results immediately newer than ID.
         */
        public ?string $min_id = null,

        /**
         * Maximum number of results to return. Defaults to 20 statuses. Max 40
         * statuses.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/timelines/home';
    }

    public function getQueryParams(): array
    {
        return [
            'max_id ' => $this->max_id,
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
}
