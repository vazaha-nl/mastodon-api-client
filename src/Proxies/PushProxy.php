<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\WebPushSubscriptionModel;
use Vazaha\Mastodon\Requests\Push\CreateRequest;
use Vazaha\Mastodon\Requests\Push\DeleteRequest;
use Vazaha\Mastodon\Requests\Push\GetRequest;
use Vazaha\Mastodon\Requests\Push\UpdateRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class PushProxy extends Proxy
{
    /**
     * Subscribe to push notifications.
     *
     * @param null|list<mixed> $subscription subscription[endpoint]: The endpoint URL that is called when a notification event occurs
     * @param null|list<mixed> $data         data[alerts][mention]: Receive mention notifications? Defaults to false
     *
     * @see https://docs.joinmastodon.org/methods/push/#create
     */
    public function create(
        ?array $subscription = null,
        ?array $data = null,
    ): WebPushSubscriptionModel {
        $result = $this->apiClient->send(new CreateRequest(
            $subscription,
            $data,
        ));

        /** @var null|\Vazaha\Mastodon\Models\WebPushSubscriptionModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Remove current subscription.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/push/#delete
     */
    public function delete(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DeleteRequest(
            ));

        return $models;
    }

    /**
     * Get current subscription.
     *
     * @see https://docs.joinmastodon.org/methods/push/#get
     */
    public function get(
    ): WebPushSubscriptionModel {
        $result = $this->apiClient->send(new GetRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\WebPushSubscriptionModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Change types of notifications.
     *
     * @param null|list<mixed> $data   data[alerts][mention]: Receive mention notifications? Defaults to false
     * @param ?string          $policy specify whether to receive push notifications from `all`, `followed`, `follower`, or `none` users
     *
     * @see https://docs.joinmastodon.org/methods/push/#update
     */
    public function update(
        ?array $data = null,
        ?string $policy = null,
    ): WebPushSubscriptionModel {
        $result = $this->apiClient->send(new UpdateRequest(
            $data,
            $policy,
        ));

        /** @var null|\Vazaha\Mastodon\Models\WebPushSubscriptionModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
