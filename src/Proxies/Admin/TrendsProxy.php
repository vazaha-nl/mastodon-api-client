<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Proxies\Proxy;
use Vazaha\Mastodon\Requests\Admin\Trends\LinksRequest;
use Vazaha\Mastodon\Requests\Admin\Trends\StatusesRequest;
use Vazaha\Mastodon\Requests\Admin\Trends\TagsRequest;
use Vazaha\Mastodon\Results\Admin\TagResult;
use Vazaha\Mastodon\Results\StatusResult;
use Vazaha\Mastodon\Results\Trends\LinkResult;

class TrendsProxy extends Proxy
{
    /**
     * View trending links.
     *
     * @return \Vazaha\Mastodon\Results\Trends\LinkResult<array-key,\Vazaha\Mastodon\Models\Trends\LinkModel>
     *
     * @see https://docs.joinmastodon.org/methods/trends/#links
     */
    public function links(
    ): LinkResult {
        /** @var \Vazaha\Mastodon\Results\Trends\LinkResult<array-key,\Vazaha\Mastodon\Models\Trends\LinkModel> */
        $models = $this->apiClient
            ->send(new LinksRequest(
            ));

        return $models;
    }

    /**
     * View trending statuses.
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel>
     *
     * @see https://docs.joinmastodon.org/methods/trends/#statuses
     */
    public function statuses(
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new StatusesRequest(
            ));

        return $models;
    }

    /**
     * View trending tags.
     *
     * @return \Vazaha\Mastodon\Results\Admin\TagResult<array-key,\Vazaha\Mastodon\Models\Admin\TagModel>
     *
     * @see https://docs.joinmastodon.org/methods/trends/#tags
     */
    public function tags(
    ): TagResult {
        /** @var \Vazaha\Mastodon\Results\Admin\TagResult<array-key,\Vazaha\Mastodon\Models\Admin\TagModel> */
        $models = $this->apiClient
            ->send(new TagsRequest(
            ));

        return $models;
    }
}
