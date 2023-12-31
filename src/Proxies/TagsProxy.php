<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\TagModel;
use Vazaha\Mastodon\Requests\Tags\FollowRequest;
use Vazaha\Mastodon\Requests\Tags\GetRequest;
use Vazaha\Mastodon\Requests\Tags\UnfollowRequest;

class TagsProxy extends Proxy
{
    /**
     * Follow a hashtag.
     *
     * @param string $id the name of the hashtag
     *
     * @see https://docs.joinmastodon.org/methods/tags/#follow
     */
    public function follow(
        string $id,
    ): TagModel {
        $result = $this->apiClient->send(new FollowRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\TagModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View information about a single tag.
     *
     * @param string $id the name of the hashtag
     *
     * @see https://docs.joinmastodon.org/methods/tags/#get
     */
    public function get(
        string $id,
    ): TagModel {
        $result = $this->apiClient->send(new GetRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\TagModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unfollow a hashtag.
     *
     * @param string $id the name of the hashtag
     *
     * @see https://docs.joinmastodon.org/methods/tags/#unfollow
     */
    public function unfollow(
        string $id,
    ): TagModel {
        $result = $this->apiClient->send(new UnfollowRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\TagModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
