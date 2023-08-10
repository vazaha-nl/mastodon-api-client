<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Suggestions;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Remove a suggestion.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/suggestions/#remove
 */
final class RemoveRequest extends Request implements RequestInterface
{
    /**
     * @param string $account_id the ID of the Account in the database
     */
    public function __construct(
        public string $account_id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/suggestions/%s', urlencode($this->account_id));
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
