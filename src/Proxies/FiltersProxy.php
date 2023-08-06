<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\Filters\CreateRequest;
use Vazaha\Mastodon\Requests\Filters\CreateV1Request;
use Vazaha\Mastodon\Requests\Filters\DeleteRequest;
use Vazaha\Mastodon\Requests\Filters\DeleteV1Request;
use Vazaha\Mastodon\Requests\Filters\GetOneRequest;
use Vazaha\Mastodon\Requests\Filters\GetOneV1Request;
use Vazaha\Mastodon\Requests\Filters\GetRequest;
use Vazaha\Mastodon\Requests\Filters\GetV1Request;
use Vazaha\Mastodon\Requests\Filters\KeywordsCreateRequest;
use Vazaha\Mastodon\Requests\Filters\KeywordsDeleteRequest;
use Vazaha\Mastodon\Requests\Filters\KeywordsGetOneRequest;
use Vazaha\Mastodon\Requests\Filters\KeywordsGetRequest;
use Vazaha\Mastodon\Requests\Filters\KeywordsUpdateRequest;
use Vazaha\Mastodon\Requests\Filters\StatusesAddRequest;
use Vazaha\Mastodon\Requests\Filters\StatusesGetOneRequest;
use Vazaha\Mastodon\Requests\Filters\StatusesGetRequest;
use Vazaha\Mastodon\Requests\Filters\StatusesRemoveRequest;
use Vazaha\Mastodon\Requests\Filters\UpdateRequest;
use Vazaha\Mastodon\Requests\Filters\UpdateV1Request;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\FilterKeywordResult;
use Vazaha\Mastodon\Results\FilterResult;
use Vazaha\Mastodon\Results\FilterStatusResult;
use Vazaha\Mastodon\Results\V1\FilterResult as V1FilterResult;

class FiltersProxy extends Proxy
{
    /**
     * Create a filter.
     *
     * @param string        $title         the name of the filter group
     * @param array<string> $context       Where the filter should be applied. Specify at least one of `home`, `notifications`, `public`, `thread`, `account`.
     * @param ?string       $filter_action The policy to be applied when the filter is matched. Specify `warn` or `hide`.
     * @param ?int          $expires_in    How many seconds from now should the filter expire?
     *
     * @return \Vazaha\Mastodon\Results\FilterResult<array-key,\Vazaha\Mastodon\Models\FilterModel>
     */
    public function create(
        string $title,
        array $context,
        ?string $filter_action = null,
        ?int $expires_in = null,
    ): FilterResult {
        /** @var \Vazaha\Mastodon\Results\FilterResult<array-key,\Vazaha\Mastodon\Models\FilterModel> */
        $models = $this->apiClient
            ->send(new CreateRequest(
                $title,
                $context,
                $filter_action,
                $expires_in,
            ));

        return $models;
    }

    /**
     * Create a filter.
     *
     * @param string        $phrase       the text to be filtered
     * @param array<string> $context      Where the filter should be applied. Specify at least one of `home`, `notifications`, `public`, `thread`, `account`.
     * @param ?bool         $irreversible should the server irreversibly drop matching entities from home and notifications? Defaults to false
     * @param ?bool         $whole_word   should the filter consider word boundaries for this keyword? Defaults to false
     * @param ?int          $expires_in   Number of seconds from now that the filter should expire. Otherwise, `null` for a filter that doesn't expire.
     *
     * @return \Vazaha\Mastodon\Results\V1\FilterResult<array-key,\Vazaha\Mastodon\Models\V1\FilterModel>
     */
    public function createV1(
        string $phrase,
        array $context,
        ?bool $irreversible = null,
        ?bool $whole_word = null,
        ?int $expires_in = null,
    ): V1FilterResult {
        /** @var \Vazaha\Mastodon\Results\V1\FilterResult<array-key,\Vazaha\Mastodon\Models\V1\FilterModel> */
        $models = $this->apiClient
            ->send(new CreateV1Request(
                $phrase,
                $context,
                $irreversible,
                $whole_word,
                $expires_in,
            ));

        return $models;
    }

    /**
     * Delete a filter.
     *
     * @param string $id the ID of the Filter in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
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
     * Remove a filter.
     *
     * @param string $id the ID of the Filter in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function deleteV1(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DeleteV1Request(
                $id,
            ));

        return $models;
    }

    /**
     * View all filters.
     *
     * @return \Vazaha\Mastodon\Results\FilterResult<array-key,\Vazaha\Mastodon\Models\FilterModel>
     */
    public function get(
    ): FilterResult {
        /** @var \Vazaha\Mastodon\Results\FilterResult<array-key,\Vazaha\Mastodon\Models\FilterModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
            ));

        return $models;
    }

    /**
     * View a specific filter.
     *
     * @param string $id the ID of the Filter in the database
     *
     * @return \Vazaha\Mastodon\Results\FilterResult<array-key,\Vazaha\Mastodon\Models\FilterModel>
     */
    public function getOne(
        string $id,
    ): FilterResult {
        /** @var \Vazaha\Mastodon\Results\FilterResult<array-key,\Vazaha\Mastodon\Models\FilterModel> */
        $models = $this->apiClient
            ->send(new GetOneRequest(
                $id,
            ));

        return $models;
    }

    /**
     * View a single filter.
     *
     * @param string $id the ID of the FilterKeyword in the database
     *
     * @return \Vazaha\Mastodon\Results\V1\FilterResult<array-key,\Vazaha\Mastodon\Models\V1\FilterModel>
     */
    public function getOneV1(
        string $id,
    ): V1FilterResult {
        /** @var \Vazaha\Mastodon\Results\V1\FilterResult<array-key,\Vazaha\Mastodon\Models\V1\FilterModel> */
        $models = $this->apiClient
            ->send(new GetOneV1Request(
                $id,
            ));

        return $models;
    }

    /**
     * View your filters.
     *
     * @return \Vazaha\Mastodon\Results\V1\FilterResult<array-key,\Vazaha\Mastodon\Models\V1\FilterModel>
     */
    public function getV1(
    ): V1FilterResult {
        /** @var \Vazaha\Mastodon\Results\V1\FilterResult<array-key,\Vazaha\Mastodon\Models\V1\FilterModel> */
        $models = $this->apiClient
            ->send(new GetV1Request(
            ));

        return $models;
    }

    /**
     * Add a keyword to a filter.
     *
     * @param string $filter_id  the ID of the Filter in the database
     * @param string $keyword    the keyword to be added to the filter group
     * @param ?bool  $whole_word whether the keyword should consider word boundaries
     *
     * @return \Vazaha\Mastodon\Results\FilterKeywordResult<array-key,\Vazaha\Mastodon\Models\FilterKeywordModel>
     */
    public function keywordsCreate(
        string $filter_id,
        string $keyword,
        ?bool $whole_word = null,
    ): FilterKeywordResult {
        /** @var \Vazaha\Mastodon\Results\FilterKeywordResult<array-key,\Vazaha\Mastodon\Models\FilterKeywordModel> */
        $models = $this->apiClient
            ->send(new KeywordsCreateRequest(
                $filter_id,
                $keyword,
                $whole_word,
            ));

        return $models;
    }

    /**
     * Remove keywords from a filter.
     *
     * @param string $id the ID of the FilterKeyword in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function keywordsDelete(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new KeywordsDeleteRequest(
                $id,
            ));

        return $models;
    }

    /**
     * View keywords added to a filter.
     *
     * @param string $filter_id the ID of the Filter in the database
     *
     * @return \Vazaha\Mastodon\Results\FilterKeywordResult<array-key,\Vazaha\Mastodon\Models\FilterKeywordModel>
     */
    public function keywordsGet(
        string $filter_id,
    ): FilterKeywordResult {
        /** @var \Vazaha\Mastodon\Results\FilterKeywordResult<array-key,\Vazaha\Mastodon\Models\FilterKeywordModel> */
        $models = $this->apiClient
            ->send(new KeywordsGetRequest(
                $filter_id,
            ));

        return $models;
    }

    /**
     * View a single keyword.
     *
     * @param string $id the ID of the FilterKeyword in the database
     *
     * @return \Vazaha\Mastodon\Results\FilterKeywordResult<array-key,\Vazaha\Mastodon\Models\FilterKeywordModel>
     */
    public function keywordsGetOne(
        string $id,
    ): FilterKeywordResult {
        /** @var \Vazaha\Mastodon\Results\FilterKeywordResult<array-key,\Vazaha\Mastodon\Models\FilterKeywordModel> */
        $models = $this->apiClient
            ->send(new KeywordsGetOneRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Edit a keyword within a filter.
     *
     * @param string $id         the ID of the FilterKeyword in the database
     * @param string $keyword    the keyword to be added to the filter group
     * @param ?bool  $whole_word whether the keyword should consider word boundaries
     *
     * @return \Vazaha\Mastodon\Results\FilterKeywordResult<array-key,\Vazaha\Mastodon\Models\FilterKeywordModel>
     */
    public function keywordsUpdate(
        string $id,
        string $keyword,
        ?bool $whole_word = null,
    ): FilterKeywordResult {
        /** @var \Vazaha\Mastodon\Results\FilterKeywordResult<array-key,\Vazaha\Mastodon\Models\FilterKeywordModel> */
        $models = $this->apiClient
            ->send(new KeywordsUpdateRequest(
                $id,
                $keyword,
                $whole_word,
            ));

        return $models;
    }

    /**
     * Add a status to a filter group.
     *
     * @param string $filter_id the ID of the Filter in the database
     *
     * @return \Vazaha\Mastodon\Results\FilterStatusResult<array-key,\Vazaha\Mastodon\Models\FilterStatusModel>
     */
    public function statusesAdd(
        string $filter_id,
    ): FilterStatusResult {
        /** @var \Vazaha\Mastodon\Results\FilterStatusResult<array-key,\Vazaha\Mastodon\Models\FilterStatusModel> */
        $models = $this->apiClient
            ->send(new StatusesAddRequest(
                $filter_id,
            ));

        return $models;
    }

    /**
     * View all status filters.
     *
     * @param string $filter_id the ID of the Filter in the database
     *
     * @return \Vazaha\Mastodon\Results\FilterStatusResult<array-key,\Vazaha\Mastodon\Models\FilterStatusModel>
     */
    public function statusesGet(
        string $filter_id,
    ): FilterStatusResult {
        /** @var \Vazaha\Mastodon\Results\FilterStatusResult<array-key,\Vazaha\Mastodon\Models\FilterStatusModel> */
        $models = $this->apiClient
            ->send(new StatusesGetRequest(
                $filter_id,
            ));

        return $models;
    }

    /**
     * View a single status filter.
     *
     * @param string $id the ID of the FilterStatus in the database
     *
     * @return \Vazaha\Mastodon\Results\FilterStatusResult<array-key,\Vazaha\Mastodon\Models\FilterStatusModel>
     */
    public function statusesGetOne(
        string $id,
    ): FilterStatusResult {
        /** @var \Vazaha\Mastodon\Results\FilterStatusResult<array-key,\Vazaha\Mastodon\Models\FilterStatusModel> */
        $models = $this->apiClient
            ->send(new StatusesGetOneRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Remove a status from a filter group.
     *
     * @param string $id the ID of the FilterStatus in the database
     *
     * @return \Vazaha\Mastodon\Results\FilterStatusResult<array-key,\Vazaha\Mastodon\Models\FilterStatusModel>
     */
    public function statusesRemove(
        string $id,
    ): FilterStatusResult {
        /** @var \Vazaha\Mastodon\Results\FilterStatusResult<array-key,\Vazaha\Mastodon\Models\FilterStatusModel> */
        $models = $this->apiClient
            ->send(new StatusesRemoveRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Update a filter.
     *
     * @param string             $id            the ID of the Filter in the database
     * @param ?string            $title         the name of the filter group
     * @param null|array<string> $context       Where the filter should be applied. Specify at least one of `home`, `notifications`, `public`, `thread`, `account`.
     * @param ?string            $filter_action The policy to be applied when the filter is matched. Specify `warn` or `hide`.
     * @param ?int               $expires_in    How many seconds from now should the filter expire?
     *
     * @return \Vazaha\Mastodon\Results\FilterResult<array-key,\Vazaha\Mastodon\Models\FilterModel>
     */
    public function update(
        string $id,
        ?string $title = null,
        ?array $context = null,
        ?string $filter_action = null,
        ?int $expires_in = null,
    ): FilterResult {
        /** @var \Vazaha\Mastodon\Results\FilterResult<array-key,\Vazaha\Mastodon\Models\FilterModel> */
        $models = $this->apiClient
            ->send(new UpdateRequest(
                $id,
                $title,
                $context,
                $filter_action,
                $expires_in,
            ));

        return $models;
    }

    /**
     * Update a filter.
     *
     * @param string        $id           the ID of the FilterKeyword in the database
     * @param string        $phrase       the text to be filtered
     * @param array<string> $context      specify at least one of `home`, `notifications`, `public`, `thread`, `account`
     * @param ?bool         $irreversible should the server irreversibly drop matching entities from home and notifications? Defaults to false
     * @param ?bool         $whole_word   should the filter consider word boundaries? Defaults to false
     * @param ?int          $expires_in   Number of seconds from now that the filter should expire. Otherwise, `null` for a filter that doesn't expire.
     *
     * @return \Vazaha\Mastodon\Results\V1\FilterResult<array-key,\Vazaha\Mastodon\Models\V1\FilterModel>
     */
    public function updateV1(
        string $id,
        string $phrase,
        array $context,
        ?bool $irreversible = null,
        ?bool $whole_word = null,
        ?int $expires_in = null,
    ): V1FilterResult {
        /** @var \Vazaha\Mastodon\Results\V1\FilterResult<array-key,\Vazaha\Mastodon\Models\V1\FilterModel> */
        $models = $this->apiClient
            ->send(new UpdateV1Request(
                $id,
                $phrase,
                $context,
                $irreversible,
                $whole_word,
                $expires_in,
            ));

        return $models;
    }
}
