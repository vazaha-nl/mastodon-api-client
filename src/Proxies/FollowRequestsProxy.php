<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\RelationshipModel;
use Vazaha\Mastodon\Requests\FollowRequests\AcceptRequest;
use Vazaha\Mastodon\Requests\FollowRequests\GetRequest;
use Vazaha\Mastodon\Requests\FollowRequests\RejectRequest;
use Vazaha\Mastodon\Results\AccountResult;

class FollowRequestsProxy extends Proxy
{
    /**
     * Accept follow request.
     *
     * @param string $account_id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/follow_requests/#accept
     */
    public function accept(
        string $account_id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new AcceptRequest(
            $account_id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View pending follow requests.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/follow_requests/#get
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

    /**
     * Reject follow request.
     *
     * @param string $account_id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/follow_requests/#reject
     */
    public function reject(
        string $account_id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new RejectRequest(
            $account_id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
