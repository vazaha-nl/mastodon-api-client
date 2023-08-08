<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\Bookmarks\GetRequest;
use Vazaha\Mastodon\Results\StatusResult;

class BookmarksProxy extends Proxy
{
    /**
     * View bookmarked statuses.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel>
     *
     * @see https://docs.joinmastodon.org/methods/bookmarks/#get
     */
    public function get(
        ?int $limit = null,
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }
}
