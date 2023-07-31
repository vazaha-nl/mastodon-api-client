<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Filters;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Add a keyword to a filter.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FilterKeywordResult>
 */
final class KeywordsCreateRequest extends \Vazaha\Mastodon\Requests\FilterKeywordRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Filter in the database.
         */
        public string $filter_id,

        /**
         * The keyword to be added to the filter group.
         */
        public string $keyword,

        /**
         * Whether the keyword should consider word boundaries.
         */
        public ?bool $whole_word = null,
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
            'keyword' => $this->keyword,
            'whole_word' => $this->whole_word,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
