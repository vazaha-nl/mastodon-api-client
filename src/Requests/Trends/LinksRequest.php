<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Trends;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View trending links.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Trends\LinkResult>
 *
 * @see https://docs.joinmastodon.org/methods/trends/#links
 */
final class LinksRequest extends \Vazaha\Mastodon\Requests\Trends\LinkRequest implements RequestInterface
{
    public function __construct(
        /**
         * Maximum number of results to return. Defaults to 10 links. Max 20 links.
         */
        public ?int $limit = null,

        /**
         * Skip the first n results.
         */
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
}
