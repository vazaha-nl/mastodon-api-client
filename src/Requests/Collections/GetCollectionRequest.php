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
use Vazaha\Mastodon\Requests\CollectionWithAccountsRequest;
use Vazaha\Mastodon\Results\CollectionWithAccountsResult;

/**
 * Get a single Collection
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\CollectionWithAccountsResult>
 *
 * @see https://docs.joinmastodon.org/methods/collections/#get_collection
 */
final class GetCollectionRequest extends Request implements RequestInterface
{

    /**
         * @param string $id The ID of the Collection.
             * @link https://docs.joinmastodon.org/methods/collections/#get_collection
        
     */
    public function __construct(
    public string $id,

    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/collections/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
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
        return CollectionWithAccountsResult::class;
    }
}
