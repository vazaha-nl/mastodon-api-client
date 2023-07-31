<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Search;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Perform a search.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\SearchResult>
 */
final class V2Request extends \Vazaha\Mastodon\Requests\SearchRequest implements RequestInterface
{
    public function __construct(
        /**
         * The search query.
         */
        public string $q,

        /**
         * Specify whether to search for only `accounts`, `hashtags`, `statuses`.
         */
        public ?string $type = null,

        /**
         * Attempt WebFinger lookup? Defaults to false.
         */
        public ?bool $resolve = null,

        /**
         * Only include accounts that the user is following? Defaults to false.
         */
        public ?bool $following = null,

        /**
         * If provided, will only return statuses authored by this account.
         */
        public ?string $account_id = null,

        /**
         * Filter out unreviewed tags? Defaults to false. Use true when trying to find
         * trending tags.
         */
        public ?bool $exclude_unreviewed = null,

        /**
         * Return results older than this ID.
         */
        public ?string $max_id = null,

        /**
         * Return results immediately newer than this ID.
         */
        public ?string $min_id = null,

        /**
         * Maximum number of results to return, per type. Defaults to 20 results per
         * category. Max 40 results per category.
         */
        public ?int $limit = null,

        /**
         * Skip the first n results.
         */
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
}
