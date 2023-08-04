<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\FollowedTags\GetRequest;
use Vazaha\Mastodon\Results\TagResult;

class FollowedTagsProxy extends Proxy
{
    /**
     * View all followed tags.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 tags. Max 200 tags.
     *
     * @return \Vazaha\Mastodon\Results\TagResult<array-key,\Vazaha\Mastodon\Models\TagModel>
     */
    public function get(
        ?int $limit = null,
    ): TagResult {
        /** @var \Vazaha\Mastodon\Results\TagResult<array-key,\Vazaha\Mastodon\Models\TagModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }
}
