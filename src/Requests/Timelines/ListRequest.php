<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Timelines;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View list timeline.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/timelines/#list
 */
final class ListRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * Local ID of the List in the database.
         */
        public string $list_id,

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
        return sprintf('/api/v1/timelines/list/%s', urlencode($this->list_id));
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
