<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Requests\Trends\LinksRequest;
use Vazaha\Mastodon\Requests\Trends\StatusesRequest;
use Vazaha\Mastodon\Requests\Trends\TagsRequest;
use Vazaha\Mastodon\Results\StatusResult;
use Vazaha\Mastodon\Results\TagResult;
use Vazaha\Mastodon\Results\Trends\LinkResult;

class TrendsProxy extends Proxy
{
    /**
     * View trending links.
     *
     * @param ?int $limit  Maximum number of results to return. Defaults to 10 links. Max 20 links.
     * @param ?int $offset skip the first n results
     *
     * @return \Vazaha\Mastodon\Results\Trends\LinkResult<array-key, \Vazaha\Mastodon\Models\Trends\LinkModel>
     *
     * @see https://docs.joinmastodon.org/methods/trends/#links
     */
    public function links(
        ?int $limit = null,
        ?int $offset = null,
    ): LinkResult {
        /** @var \Vazaha\Mastodon\Results\Trends\LinkResult<array-key, \Vazaha\Mastodon\Models\Trends\LinkModel> */
        $models = $this->apiClient
            ->send(new LinksRequest(
                $limit,
                $offset,
            ));

        return $models;
    }

    /**
     * View trending statuses.
     *
     * @param ?int $limit  Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     * @param ?int $offset skip the first n results
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key, \Vazaha\Mastodon\Models\StatusModel>
     *
     * @see https://docs.joinmastodon.org/methods/trends/#statuses
     */
    public function statuses(
        ?int $limit = null,
        ?int $offset = null,
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key, \Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new StatusesRequest(
                $limit,
                $offset,
            ));

        return $models;
    }

    /**
     * View trending tags.
     *
     * @param ?int $limit  Maximum number of results to return. Defaults to 10 tags. Max 20 tags.
     * @param ?int $offset skip the first n results
     *
     * @return \Vazaha\Mastodon\Results\TagResult<array-key, \Vazaha\Mastodon\Models\TagModel>
     *
     * @see https://docs.joinmastodon.org/methods/trends/#tags
     */
    public function tags(
        ?int $limit = null,
        ?int $offset = null,
    ): TagResult {
        /** @var \Vazaha\Mastodon\Results\TagResult<array-key, \Vazaha\Mastodon\Models\TagModel> */
        $models = $this->apiClient
            ->send(new TagsRequest(
                $limit,
                $offset,
            ));

        return $models;
    }
}
