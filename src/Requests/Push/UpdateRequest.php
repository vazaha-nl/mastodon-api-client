<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Push;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Change types of notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WebPushSubscriptionResult>
 *
 * @see https://docs.joinmastodon.org/methods/push/#update
 */
final class UpdateRequest extends \Vazaha\Mastodon\Requests\WebPushSubscriptionRequest implements RequestInterface
{
    public function __construct(
        /**
         * data[alerts][mention]: Receive mention notifications? Defaults to false.
         *
         * @var null|mixed[] $data
         */
        public ?array $data = null,

        /**
         * Specify whether to receive push notifications from `all`, `followed`,
         * `follower`, or `none` users.
         */
        public ?string $policy = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/push/subscription';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'data' => $this->data,
            'policy' => $this->policy,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
