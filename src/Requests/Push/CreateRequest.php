<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Push;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Subscribe to push notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WebPushSubscriptionResult>
 *
 * @see https://docs.joinmastodon.org/methods/push/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\WebPushSubscriptionRequest implements RequestInterface
{
    public function __construct(
        /**
         * subscription[endpoint]: The endpoint URL that is called when a notification
         * event occurs.
         *
         * @var null|mixed[] $subscription
         */
        public ?array $subscription = null,

        /**
         * data[alerts][mention]: Receive mention notifications? Defaults to false.
         *
         * @var null|mixed[] $data
         */
        public ?array $data = null,
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
            'subscription' => $this->subscription,
            'data' => $this->data,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
