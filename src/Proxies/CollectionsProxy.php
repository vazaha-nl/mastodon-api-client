<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Models\CollectionWithAccountsModel;
use Vazaha\Mastodon\Models\CollectionsModel;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Models\WrappedCollectionItemModel;
use Vazaha\Mastodon\Models\WrappedCollectionModel;
use Vazaha\Mastodon\Requests\Collections\AddAccountRequest;
use Vazaha\Mastodon\Requests\Collections\CreateRequest;
use Vazaha\Mastodon\Requests\Collections\DeleteCollectionRequest;
use Vazaha\Mastodon\Requests\Collections\GetCollectionRequest;
use Vazaha\Mastodon\Requests\Collections\GetCollectionsRequest;
use Vazaha\Mastodon\Requests\Collections\InCollectionsRequest;
use Vazaha\Mastodon\Requests\Collections\RemoveAccountRequest;
use Vazaha\Mastodon\Requests\Collections\RevokeItemRequest;
use Vazaha\Mastodon\Requests\Collections\UpdateCollectionRequest;
use Vazaha\Mastodon\Results\CollectionWithAccountsResult;
use Vazaha\Mastodon\Results\CollectionsResult;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\WrappedCollectionItemResult;
use Vazaha\Mastodon\Results\WrappedCollectionResult;

class CollectionsProxy extends Proxy
{


/**
 * Add an account to a Collection
 * @param string $collection_id The ID of the Collection.
 * @param string $account_id ID of the account to add to this Collection.
 * @return \Vazaha\Mastodon\Models\WrappedCollectionItemModel
 * @link https://docs.joinmastodon.org/methods/collections/#add_account
 */
    public function addAccount(
    string $collection_id,
    string $account_id,
    ): WrappedCollectionItemModel
    {
        $result = $this->apiClient->send(new AddAccountRequest(
    $collection_id,
    $account_id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\WrappedCollectionItemModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

/**
 * Create a Collection
 * @param string $name A name for this Collection, max. 40 characters. String is taken "as is", which means there is currently no special handling of URLs and hashtags and no support for custom emoji.
 * @param ?string $description A longer description of this Collection, max. 100 characters. String is taken "as is", which means there is currently no special handling of URLs and hashtags and no support for custom emoji.
 * @param ?string $language One of Mastodon's supported language codes (two letter ISO 639-1 plus exceptions).
 * @param ?string $tag_name A single hashtag that describes the Collection.
 * @param ?bool $sensitive Whether this Collection should be marked as sensitive.
 * @param ?bool $discoverable Whether this Collection should appear on the profile of the user, in search results and other discovery mechanisms.
 * @param null|array<string> $account_ids IDs of the accounts to feature in this Collection.
 * @return \Vazaha\Mastodon\Models\WrappedCollectionModel
 * @link https://docs.joinmastodon.org/methods/collections/#create
 */
    public function create(
    string $name,
    ?string $description = null,
    ?string $language = null,
    ?string $tag_name = null,
    ?bool $sensitive = null,
    ?bool $discoverable = null,
    ?array $account_ids = null,
    ): WrappedCollectionModel
    {
        $result = $this->apiClient->send(new CreateRequest(
    $name,
    $description,
    $language,
    $tag_name,
    $sensitive,
    $discoverable,
    $account_ids,
        ));

        /** @var null|\Vazaha\Mastodon\Models\WrappedCollectionModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

/**
 * Delete a Collection
 * @param string $id The ID of the Collection.
 * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
 * @link https://docs.joinmastodon.org/methods/collections/#delete_collection
 */
    public function deleteCollection(
    string $id,
    ): EmptyOrUnknownResult {

        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DeleteCollectionRequest(
    $id,
            ));

        return $models;
    }

/**
 * Get a single Collection
 * @param string $id The ID of the Collection.
 * @return \Vazaha\Mastodon\Models\CollectionWithAccountsModel
 * @link https://docs.joinmastodon.org/methods/collections/#get_collection
 */
    public function getCollection(
    string $id,
    ): CollectionWithAccountsModel
    {
        $result = $this->apiClient->send(new GetCollectionRequest(
    $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\CollectionWithAccountsModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

/**
 * Get all Collections from a given account
 * @param string $account_id The ID of the account.
 * @param ?int $limit Maximum number of results. Defaults to 40 Collections. Max 80 Collections.
 * @param ?int $offset Skip the first n results. Defaults to 0.
 * @return \Vazaha\Mastodon\Models\CollectionsModel
 * @link https://docs.joinmastodon.org/methods/collections/#get_collections
 */
    public function getCollections(
    string $account_id,
    ?int $limit = null,
    ?int $offset = null,
    ): CollectionsModel
    {
        $result = $this->apiClient->send(new GetCollectionsRequest(
    $account_id,
    $limit,
    $offset,
        ));

        /** @var null|\Vazaha\Mastodon\Models\CollectionsModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

/**
 * Get all Collections the current account is featured in
 * @param string $account_id The ID of the account.
 * @param ?int $limit Maximum number of results. Defaults to 40 Collections. Max 80 Collections.
 * @param ?int $offset Skip the first n results. Defaults to 0.
 * @return \Vazaha\Mastodon\Models\CollectionsModel
 * @link https://docs.joinmastodon.org/methods/collections/#in_collections
 */
    public function inCollections(
    string $account_id,
    ?int $limit = null,
    ?int $offset = null,
    ): CollectionsModel
    {
        $result = $this->apiClient->send(new InCollectionsRequest(
    $account_id,
    $limit,
    $offset,
        ));

        /** @var null|\Vazaha\Mastodon\Models\CollectionsModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

/**
 * Remove an account from a Collection
 * @param string $collection_id The ID of the Collection.
 * @param string $id The ID of the Collection item.
 * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
 * @link https://docs.joinmastodon.org/methods/collections/#remove_account
 */
    public function removeAccount(
    string $collection_id,
    string $id,
    ): EmptyOrUnknownResult {

        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new RemoveAccountRequest(
    $collection_id,
    $id,
            ));

        return $models;
    }

/**
 * Revoke inclusion in a Collection
 * @param string $collection_id The ID of the Collection.
 * @param string $id The ID of the Collection item.
 * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
 * @link https://docs.joinmastodon.org/methods/collections/#revoke_item
 */
    public function revokeItem(
    string $collection_id,
    string $id,
    ): EmptyOrUnknownResult {

        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new RevokeItemRequest(
    $collection_id,
    $id,
            ));

        return $models;
    }

/**
 * Update a Collection
 * @param string $id The ID of the Collection.
 * @param ?string $name A name for this Collection, max. 40 characters.
 * @param ?string $description A longer description of this Collection, max. 100 characters. String is taken "as is", which means there is currently no special handling of URLs and hashtags and no support for custom emoji.
 * @param ?string $language One of Mastodon's supported language codes (two letter ISO 639-1 plus exceptions).
 * @param ?string $tag_name A single hashtag that describes the Collection.
 * @param ?bool $sensitive Whether this Collection should be marked as sensitive.
 * @param ?bool $discoverable Whether this Collection should appear on the profile of the user, in search results and other discovery mechanisms.
 * @return \Vazaha\Mastodon\Models\WrappedCollectionModel
 * @link https://docs.joinmastodon.org/methods/collections/#update_collection
 */
    public function updateCollection(
    string $id,
    ?string $name = null,
    ?string $description = null,
    ?string $language = null,
    ?string $tag_name = null,
    ?bool $sensitive = null,
    ?bool $discoverable = null,
    ): WrappedCollectionModel
    {
        $result = $this->apiClient->send(new UpdateCollectionRequest(
    $id,
    $name,
    $description,
    $language,
    $tag_name,
    $sensitive,
    $discoverable,
        ));

        /** @var null|\Vazaha\Mastodon\Models\WrappedCollectionModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

}
