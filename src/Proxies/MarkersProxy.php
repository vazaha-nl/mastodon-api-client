<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\MarkerModel;
use Vazaha\Mastodon\Requests\Markers\CreateRequest;
use Vazaha\Mastodon\Requests\Markers\GetRequest;

class MarkersProxy extends Proxy
{
    /**
     * Save your position in a timeline.
     *
     * @param null|mixed[] $home          home[last_read_id]: ID of the last status read in the home timeline
     * @param null|mixed[] $notifications notifications[last_read_id]: ID of the last notification read
     *
     * @see https://docs.joinmastodon.org/methods/markers/#create
     */
    public function create(
        ?array $home = null,
        ?array $notifications = null,
    ): MarkerModel {
        $result = $this->apiClient->send(new CreateRequest(
            $home,
            $notifications,
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
     *
     * @see https://docs.joinmastodon.org/methods/markers/#get
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
