<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Models\WebPushSubscriptionModel;
use Vazaha\Mastodon\Requests\Push\CreateRequest;
use Vazaha\Mastodon\Requests\Push\DeleteRequest;
use Vazaha\Mastodon\Requests\Push\GetRequest;
use Vazaha\Mastodon\Requests\Push\UpdateRequest;

class PushProxy extends Proxy
{
    /**
     * Remove current subscription.
     */
    public function delete(
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new DeleteRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Change types of notifications.
     *
     * @param ?string $policy specify whether to receive push notifications from `all`, `followed`, `follower`, or `none` users
     */
    public function update(
        ?string $policy = null,
    ): WebPushSubscriptionModel {
        $result = $this->apiClient->send(new UpdateRequest(
            $policy,
        ));

        /** @var null|\Vazaha\Mastodon\Models\WebPushSubscriptionModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Subscribe to push notifications.
     */
    public function create(
    ): WebPushSubscriptionModel {
        $result = $this->apiClient->send(new CreateRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\WebPushSubscriptionModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get current subscription.
     */
    public function get(
    ): WebPushSubscriptionModel {
        $result = $this->apiClient->send(new GetRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\WebPushSubscriptionModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
