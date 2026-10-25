<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Collections;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\WrappedCollectionItemResult;

/**
 * Add an account to a Collection.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WrappedCollectionItemResult>
 *
 * @see https://docs.joinmastodon.org/methods/collections/#add_account
 */
final class AddAccountRequest extends Request implements RequestInterface
{
    /**
     * @param string  $collection_id ID of the collection. Required.
     * @param ?string $account_id    ID of the account to add to this Collection
     *
     * @see https://docs.joinmastodon.org/methods/collections/#add_account
     */
    public function __construct(
        public string $collection_id,
        public ?string $account_id = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/collections/116131056935959117/items';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return [
            'account_id' => $this->account_id,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return WrappedCollectionItemResult::class;
    }
}
