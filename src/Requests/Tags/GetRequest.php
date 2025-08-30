<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Tags;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\TagResult;

/**
 * View information about a single tag.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\TagResult>
 *
 * @see https://docs.joinmastodon.org/methods/tags/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param string $name the name of the hashtag, case-insensitive
     *
     * @see https://docs.joinmastodon.org/methods/tags/#get
     */
    public function __construct(
        public string $name,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/tags/%s', urlencode($this->name));
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
        return TagResult::class;
    }
}
