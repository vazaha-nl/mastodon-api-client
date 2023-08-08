<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Pin status to profile.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#pin
 */
final class PinRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * The local ID of the Status in the database. The status should be authored
         * by the authorized account.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s/pin', urlencode($this->id));
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
