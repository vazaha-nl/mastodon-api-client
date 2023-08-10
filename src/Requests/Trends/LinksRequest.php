<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Trends;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\Trends\LinkResult;

/**
 * View trending links.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Trends\LinkResult>
 *
 * @see https://docs.joinmastodon.org/methods/trends/#links
 */
final class LinksRequest extends Request implements RequestInterface
{
    /**
     * @param ?int $limit  Maximum number of results to return. Defaults to 10 links. Max 20 links.
     * @param ?int $offset skip the first n results
     */
    public function __construct(
        public ?int $limit = null,
        public ?int $offset = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/trends/links';
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
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return LinkResult::class;
    }
}
