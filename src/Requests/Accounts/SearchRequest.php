<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Search for matching accounts.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class SearchRequest extends \Vazaha\Mastodon\Requests\AccountRequest implements RequestInterface
{
    public function __construct(
        /**
         * Search query for accounts.
         */
        public string $q,

        /**
         * Maximum number of results. Defaults to 40 accounts. Max 80 accounts.
         */
        public ?int $limit = null,

        /**
         * Skip the first n results.
         */
        public ?int $offset = null,

        /**
         * Attempt WebFinger lookup. Defaults to false. Use this when `q` is an exact
         * address.
         */
        public ?bool $resolve = null,

        /**
         * Limit the search to users you are following. Defaults to false.
         */
        public ?bool $following = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/accounts/search';
    }

    public function getQueryParams(): array
    {
        return [
            'q' => $this->q,
            'limit' => $this->limit,
            'offset' => $this->offset,
            'resolve' => $this->resolve,
            'following' => $this->following,
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
