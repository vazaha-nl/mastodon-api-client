<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\Lists\AccountsAddRequest;
use Vazaha\Mastodon\Requests\Lists\AccountsRemoveRequest;
use Vazaha\Mastodon\Requests\Lists\AccountsRequest;
use Vazaha\Mastodon\Requests\Lists\CreateRequest;
use Vazaha\Mastodon\Requests\Lists\DeleteRequest;
use Vazaha\Mastodon\Requests\Lists\GetOneRequest;
use Vazaha\Mastodon\Requests\Lists\GetRequest;
use Vazaha\Mastodon\Requests\Lists\UpdateRequest;
use Vazaha\Mastodon\Results\AccountResult;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\ListResult;

class ListsProxy extends Proxy
{
    /**
     * View accounts in a list.
     *
     * @param string $id    the ID of the List in the database
     * @param ?int   $limit Maximum number of results. Defaults to 40 accounts. Max 80 accounts. Set to 0 in order to get all accounts without pagination.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/lists/#accounts
     */
    public function accounts(
        string $id,
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new AccountsRequest(
                $id,
                $limit,
            ));

        return $models;
    }

    /**
     * Add accounts to a list.
     *
     * @param string        $id          the ID of the List in the database
     * @param array<string> $account_ids the accounts that should be added to the list
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/lists/#accounts-add
     */
    public function accountsAdd(
        string $id,
        array $account_ids = [],
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new AccountsAddRequest(
                $id,
                $account_ids,
            ));

        return $models;
    }

    /**
     * Remove accounts from list.
     *
     * @param string        $id          the ID of the List in the database
     * @param array<string> $account_ids the accounts that should be removed from the list
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/lists/#accounts-remove
     */
    public function accountsRemove(
        string $id,
        array $account_ids = [],
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new AccountsRemoveRequest(
                $id,
                $account_ids,
            ));

        return $models;
    }

    /**
     * Create a list.
     *
     * @param string  $title          the title of the list to be created
     * @param ?string $replies_policy One of `followed`, `list`, or `none`. Defaults to `list`.
     *
     * @return \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel>
     *
     * @see https://docs.joinmastodon.org/methods/lists/#create
     */
    public function create(
        string $title,
        ?string $replies_policy = null,
    ): ListResult {
        /** @var \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel> */
        $models = $this->apiClient
            ->send(new CreateRequest(
                $title,
                $replies_policy,
            ));

        return $models;
    }

    /**
     * Delete a list.
     *
     * @param string $id the ID of the List in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/lists/#delete
     */
    public function delete(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DeleteRequest(
                $id,
            ));

        return $models;
    }

    /**
     * View your lists.
     *
     * @return \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel>
     *
     * @see https://docs.joinmastodon.org/methods/lists/#get
     */
    public function get(
    ): ListResult {
        /** @var \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
            ));

        return $models;
    }

    /**
     * Show a single list.
     *
     * @param string $id the ID of the List in the database
     *
     * @return \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel>
     *
     * @see https://docs.joinmastodon.org/methods/lists/#get-one
     */
    public function getOne(
        string $id,
    ): ListResult {
        /** @var \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel> */
        $models = $this->apiClient
            ->send(new GetOneRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Update a list.
     *
     * @param string  $id             the ID of the List in the database
     * @param string  $title          the title of the list to be created
     * @param ?string $replies_policy One of `followed`, `list`, or `none`. Defaults to `list`.
     *
     * @return \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel>
     *
     * @see https://docs.joinmastodon.org/methods/lists/#update
     */
    public function update(
        string $id,
        string $title,
        ?string $replies_policy = null,
    ): ListResult {
        /** @var \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel> */
        $models = $this->apiClient
            ->send(new UpdateRequest(
                $id,
                $title,
                $replies_policy,
            ));

        return $models;
    }
}
