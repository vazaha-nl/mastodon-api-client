<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Filters;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Add a status to a filter group.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FilterStatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/filters/#statuses-add
 */
final class StatusesAddRequest extends \Vazaha\Mastodon\Requests\FilterStatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Filter in the database.
         */
        public string $filter_id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v2/filters/%s/statuses', urlencode($this->filter_id));
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
        return HttpMethod::POST;
    }
}
