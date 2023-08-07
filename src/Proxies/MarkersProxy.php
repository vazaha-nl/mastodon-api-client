<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\MarkerModel;
use Vazaha\Mastodon\Requests\Markers\CreateRequest;
use Vazaha\Mastodon\Requests\Markers\GetRequest;

class MarkersProxy extends Proxy
{
    /**
     * Save your position in a timeline.
     */
    public function create(
    ): MarkerModel {
        $result = $this->apiClient->send(new CreateRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\MarkerModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get saved timeline positions.
     *
     * @param null|array<string> $timeline Specify the timeline(s) for which markers should be fetched. Possible values: `home`, `notifications`. If not provided, an empty object will be returned.
     */
    public function get(
        ?array $timeline = null,
    ): MarkerModel {
        $result = $this->apiClient->send(new GetRequest(
            $timeline,
        ));

        /** @var null|\Vazaha\Mastodon\Models\MarkerModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
