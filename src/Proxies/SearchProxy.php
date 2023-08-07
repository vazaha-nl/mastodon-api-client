<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\SearchModel;
use Vazaha\Mastodon\Requests\Search\V1Request;
use Vazaha\Mastodon\Requests\Search\V2Request;
use Vazaha\Mastodon\Results\SearchResult;

class SearchProxy extends Proxy
{
    /**
     * (REMOVED) Search results (v1).
     *
     * @param string  $q          the search query
     * @param ?string $type       Specify whether to search for only `accounts`, `hashtags`, `statuses`
     * @param ?bool   $resolve    attempt WebFinger lookup? Defaults to false
     * @param ?string $account_id if provided, will only return statuses authored by this account
     * @param ?string $max_id     return results older than this ID
     * @param ?string $min_id     return results immediately newer than this ID
     * @param ?int    $limit      Maximum number of results to return, per type. Defaults to 20 results per category. Max 40 results per category.
     * @param ?int    $offset     Offset in search results, used for pagination. Defaults to 0.
     *
     * @return \Vazaha\Mastodon\Results\SearchResult<array-key,\Vazaha\Mastodon\Models\SearchModel>
     */
    public function v1(
        string $q,
        ?string $type = null,
        ?bool $resolve = null,
        ?string $account_id = null,
        ?string $max_id = null,
        ?string $min_id = null,
        ?int $limit = null,
        ?int $offset = null,
    ): SearchResult {
        /** @var \Vazaha\Mastodon\Results\SearchResult<array-key,\Vazaha\Mastodon\Models\SearchModel> */
        $models = $this->apiClient
            ->send(new V1Request(
                $q,
                $type,
                $resolve,
                $account_id,
                $max_id,
                $min_id,
                $limit,
                $offset,
            ));

        return $models;
    }

    /**
     * Perform a search.
     *
     * @param string  $q                  the search query
     * @param ?string $type               Specify whether to search for only `accounts`, `hashtags`, `statuses`
     * @param ?bool   $resolve            attempt WebFinger lookup? Defaults to false
     * @param ?bool   $following          only include accounts that the user is following? Defaults to false
     * @param ?string $account_id         if provided, will only return statuses authored by this account
     * @param ?bool   $exclude_unreviewed Filter out unreviewed tags? Defaults to false. Use true when trying to find trending tags.
     * @param ?string $max_id             return results older than this ID
     * @param ?string $min_id             return results immediately newer than this ID
     * @param ?int    $limit              Maximum number of results to return, per type. Defaults to 20 results per category. Max 40 results per category.
     * @param ?int    $offset             skip the first n results
     */
    public function v2(
        string $q,
        ?string $type = null,
        ?bool $resolve = null,
        ?bool $following = null,
        ?string $account_id = null,
        ?bool $exclude_unreviewed = null,
        ?string $max_id = null,
        ?string $min_id = null,
        ?int $limit = null,
        ?int $offset = null,
    ): SearchModel {
        $result = $this->apiClient->send(new V2Request(
            $q,
            $type,
            $resolve,
            $following,
            $account_id,
            $exclude_unreviewed,
            $max_id,
            $min_id,
            $limit,
            $offset,
        ));

        /** @var null|\Vazaha\Mastodon\Models\SearchModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
