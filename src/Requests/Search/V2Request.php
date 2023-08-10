<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Search;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\SearchResult;

/**
 * Perform a search.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\SearchResult>
 *
 * @see https://docs.joinmastodon.org/methods/search/#v2
 */
final class V2Request extends Request implements RequestInterface
{
    /**
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
    public function __construct(
        public string $q,
        public ?string $type = null,
        public ?bool $resolve = null,
        public ?bool $following = null,
        public ?string $account_id = null,
        public ?bool $exclude_unreviewed = null,
        public ?string $max_id = null,
        public ?string $min_id = null,
        public ?int $limit = null,
        public ?int $offset = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v2/search';
    }

    public function getQueryParams(): array
    {
        return [
            'q' => $this->q,
            'type' => $this->type,
            'resolve' => $this->resolve,
            'following' => $this->following,
            'account_id' => $this->account_id,
            'exclude_unreviewed' => $this->exclude_unreviewed,
            'max_id ' => $this->max_id,
            'min_id' => $this->min_id,
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return SearchResult::class;
    }
}
