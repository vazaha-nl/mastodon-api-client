<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Filters;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View a single status filter.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FilterStatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/filters/#statuses-get-one
 */
final class StatusesGetOneRequest extends \Vazaha\Mastodon\Requests\FilterStatusRequest implements RequestInterface
{
    /**
     * @param string $id the ID of the FilterStatus in the database
     */
    public function __construct(
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v2/filters/statuses/%s', urlencode($this->id));
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
        return HttpMethod::GET;
    }
}
