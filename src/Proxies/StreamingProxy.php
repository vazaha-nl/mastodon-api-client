<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Requests\Streaming\HealthRequest;

class StreamingProxy extends Proxy
{
    /**
     * Check if the server is alive.
     *
     * @see https://docs.joinmastodon.org/methods/streaming/#health
     */
    public function health(
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new HealthRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
