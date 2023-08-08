<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Bookmarks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View bookmarked statuses.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/bookmarks/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * Maximum number of results to return. Defaults to 20 statuses. Max 40
         * statuses.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/bookmarks';
    }

    public function getQueryParams(): array
    {
        return [
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
