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
use Vazaha\Mastodon\Requests\EmptyOrUnknownRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Remove an account from a Collection
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/collections/#remove_account
 */
final class RemoveAccountRequest extends Request implements RequestInterface
{

    /**
         * @param string $collection_id The ID of the Collection.
         * @param string $id The ID of the Collection item.
             * @link https://docs.joinmastodon.org/methods/collections/#remove_account
        
     */
    public function __construct(
    public string $collection_id,

    public string $id,

    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/collections/%s/items/%s', urlencode($this->collection_id), urlencode($this->id));
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
        return HttpMethod::DELETE;
    }

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
