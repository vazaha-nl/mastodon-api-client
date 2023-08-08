<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\FeaturedTags;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View suggested tags to feature.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\TagResult>
 *
 * @see https://docs.joinmastodon.org/methods/featured_tags/#suggestions
 */
final class SuggestionsRequest extends \Vazaha\Mastodon\Requests\TagRequest implements RequestInterface
{
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/featured_tags/suggestions';
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
}
