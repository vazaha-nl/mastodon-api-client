<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Collections;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\WrappedCollectionItemRequest;
use Vazaha\Mastodon\Results\WrappedCollectionItemResult;

/**
 * Add an account to a Collection
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WrappedCollectionItemResult>
 *
 * @see https://docs.joinmastodon.org/methods/collections/#add_account
 */
final class AddAccountRequest extends Request implements RequestInterface
{

    /**
         * @param string $collection_id The ID of the Collection.
         * @param string $account_id ID of the account to add to this Collection.
             * @link https://docs.joinmastodon.org/methods/collections/#add_account
        
     */
    public function __construct(
    public string $collection_id,

    public string $account_id,

    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/collections/%s/items', urlencode($this->collection_id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
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
