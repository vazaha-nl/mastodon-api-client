<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\FeaturedTags;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\FeaturedTagResult;

/**
 * Feature a tag.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FeaturedTagResult>
 *
 * @see https://docs.joinmastodon.org/methods/featured_tags/#feature
 */
final class FeatureRequest extends Request implements RequestInterface
{
    /**
     * @param string $name the hashtag to be featured, without the hash sign
     */
    public function __construct(
        public string $name,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/featured_tags';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'name' => $this->name,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return FeaturedTagResult::class;
    }
}
