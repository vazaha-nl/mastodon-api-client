<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Requests\Mutes\GetRequest;
use Vazaha\Mastodon\Results\MutedAccountResult;

class MutesProxy extends Proxy
{
    /**
     * View muted accounts.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\MutedAccountResult<array-key, \Vazaha\Mastodon\Models\MutedAccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/mutes/#get
     */
    public function get(?int $limit = null): MutedAccountResult
    {
        /** @var \Vazaha\Mastodon\Results\MutedAccountResult<array-key, \Vazaha\Mastodon\Models\MutedAccountModel> */
        $models = $this->apiClient
            ->send(new GetRequest($limit));

        return $models;
    }
}
