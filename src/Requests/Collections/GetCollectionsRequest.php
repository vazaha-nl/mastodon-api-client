<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Collections;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\CollectionsResult;

/**
 * Get all Collections from a given account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\CollectionsResult>
 *
 * @see https://docs.joinmastodon.org/methods/collections/#get_collections
 */
final class GetCollectionsRequest extends Request implements RequestInterface
{
    /**
     * @param string $account_id ID of the account. Required.
     * @param ?int   $limit      Maximum number of results. Defaults to 40 Collections. Max 80 Collections.
     * @param ?int   $offset     Skip the first n results. Defaults to 0.
     *
     * @see https://docs.joinmastodon.org/methods/collections/#get_collections
     */
    public function __construct(
        public string $account_id,
        public ?int $limit = null,
        public ?int $offset = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s/collections', urlencode($this->account_id));
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    public function getFormParams(): array
    {
        return [];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return CollectionsResult::class;
    }
}
