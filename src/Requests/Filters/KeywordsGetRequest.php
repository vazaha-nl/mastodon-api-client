<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Filters;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View keywords added to a filter.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FilterKeywordResult>
 *
 * @see https://docs.joinmastodon.org/methods/filters/#keywords-get
 */
final class KeywordsGetRequest extends \Vazaha\Mastodon\Requests\FilterKeywordRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Filter in the database.
         */
        public string $filter_id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v2/filters/%s/keywords', urlencode($this->filter_id));
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
