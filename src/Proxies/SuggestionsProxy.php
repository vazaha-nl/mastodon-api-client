<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\Suggestions\RemoveRequest;
use Vazaha\Mastodon\Requests\Suggestions\V1Request;
use Vazaha\Mastodon\Requests\Suggestions\V2Request;
use Vazaha\Mastodon\Results\AccountResult;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\SuggestionResult;

class SuggestionsProxy extends Proxy
{
    /**
     * (DEPRECATED) View follow suggestions (v1).
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     */
    public function v1(
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new V1Request(
                $limit,
            ));

        return $models;
    }

    /**
     * View follow suggestions (v2).
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\SuggestionResult<array-key,\Vazaha\Mastodon\Models\SuggestionModel>
     */
    public function v2(
        ?int $limit = null,
    ): SuggestionResult {
        /** @var \Vazaha\Mastodon\Results\SuggestionResult<array-key,\Vazaha\Mastodon\Models\SuggestionModel> */
        $models = $this->apiClient
            ->send(new V2Request(
                $limit,
            ));

        return $models;
    }

    /**
     * Remove a suggestion.
     *
     * @param string $account_id the ID of the Account in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function remove(
        string $account_id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new RemoveRequest(
                $account_id,
            ));

        return $models;
    }
}
