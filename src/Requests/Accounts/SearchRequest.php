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
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#search
 */
final class SearchRequest extends \Vazaha\Mastodon\Requests\AccountRequest implements RequestInterface
{
    /**
     * @param string $q         search query for accounts
     * @param ?int   $limit     Maximum number of results. Defaults to 40 accounts. Max 80 accounts.
     * @param ?int   $offset    skip the first n results
     * @param ?bool  $resolve   Attempt WebFinger lookup. Defaults to false. Use this when `q` is an exact address.
     * @param ?bool  $following Limit the search to users you are following. Defaults to false.
     */
    public function __construct(
        public string $q,
        public ?int $limit = null,
        public ?int $offset = null,
        public ?bool $resolve = null,
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
