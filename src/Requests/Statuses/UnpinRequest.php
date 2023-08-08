<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Unpin status from profile.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#unpin
 */
final class UnpinRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * The local ID of the Status in the database.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s/unpin', urlencode($this->id));
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
