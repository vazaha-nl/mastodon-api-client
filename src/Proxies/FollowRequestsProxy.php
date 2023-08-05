<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\FollowRequests\AcceptRequest;
use Vazaha\Mastodon\Requests\FollowRequests\GetRequest;
use Vazaha\Mastodon\Requests\FollowRequests\RejectRequest;
use Vazaha\Mastodon\Results\AccountResult;
use Vazaha\Mastodon\Results\RelationshipResult;

class FollowRequestsProxy extends Proxy
{
    /**
     * Accept follow request.
     *
     * @param string $account_id the ID of the Account in the database
     *
     * @return \Vazaha\Mastodon\Results\RelationshipResult<array-key,\Vazaha\Mastodon\Models\RelationshipModel>
     */
    public function accept(
        string $account_id,
    ): RelationshipResult {
        /** @var \Vazaha\Mastodon\Results\RelationshipResult<array-key,\Vazaha\Mastodon\Models\RelationshipModel> */
        $models = $this->apiClient
            ->send(new AcceptRequest(
                $account_id,
            ));

        return $models;
    }

    /**
     * Reject follow request.
     *
     * @param string $account_id the ID of the Account in the database
     *
     * @return \Vazaha\Mastodon\Results\RelationshipResult<array-key,\Vazaha\Mastodon\Models\RelationshipModel>
     */
    public function reject(
        string $account_id,
    ): RelationshipResult {
        /** @var \Vazaha\Mastodon\Results\RelationshipResult<array-key,\Vazaha\Mastodon\Models\RelationshipModel> */
        $models = $this->apiClient
            ->send(new RejectRequest(
                $account_id,
            ));

        return $models;
    }

    /**
     * View pending follow requests.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     */
    public function get(
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }
}
