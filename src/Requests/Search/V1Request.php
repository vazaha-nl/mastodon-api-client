<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Search;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * (REMOVED) Search results (v1).
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\SearchResult>
 */
final class V1Request extends \Vazaha\Mastodon\Requests\SearchRequest implements RequestInterface
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
         * If provided, will only return statuses authored by this account.
         */
        public ?string $account_id = null,

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
         * Offset in search results, used for pagination. Defaults to 0.
         */
        public ?int $offset = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/search';
    }

    public function getQueryParams(): array
    {
        return [
            'q' => $this->q,
            'type' => $this->type,
            'resolve' => $this->resolve,
            'account_id' => $this->account_id,
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
