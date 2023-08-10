<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Push;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\WebPushSubscriptionResult;

/**
 * Subscribe to push notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WebPushSubscriptionResult>
 *
 * @see https://docs.joinmastodon.org/methods/push/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param null|mixed[] $subscription subscription[endpoint]: The endpoint URL that is called when a notification event occurs
     * @param null|mixed[] $data         data[alerts][mention]: Receive mention notifications? Defaults to false
     */
    public function __construct(
        public ?array $subscription = null,
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

    public function getResultClass(): string
    {
        return WebPushSubscriptionResult::class;
    }
}
