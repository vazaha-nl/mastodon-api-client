<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Collections;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Revoke inclusion in a Collection.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/collections/#revoke_item
 */
final class RevokeItemRequest extends Request implements RequestInterface
{
    /**
     * @see https://docs.joinmastodon.org/methods/collections/#revoke_item
     */
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/collections/116131056935959117/items/116151066915353115/revoke';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return [];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
