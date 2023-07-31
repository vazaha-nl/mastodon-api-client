<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\FeaturedTags;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Feature a tag.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FeaturedTagResult>
 */
final class FeatureRequest extends \Vazaha\Mastodon\Requests\FeaturedTagRequest implements RequestInterface
{
    public function __construct(
        /**
         * The hashtag to be featured, without the hash sign.
         */
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
}
