<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Filters;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\FilterResult;

/**
 * View a specific filter.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FilterResult>
 *
 * @see https://docs.joinmastodon.org/methods/filters/#get-one
 */
final class GetOneRequest extends Request implements RequestInterface
{
    /**
     * @param string $id the ID of the Filter in the database
     */
    public function __construct(
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v2/filters/%s', urlencode($this->id));
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
        return FilterResult::class;
    }
}
