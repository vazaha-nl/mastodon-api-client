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
 *
 * @see https://docs.joinmastodon.org/methods/filters/#keywords-create
 */
final class KeywordsCreateRequest extends \Vazaha\Mastodon\Requests\FilterKeywordRequest implements RequestInterface
{
    /**
     * @param string $filter_id  the ID of the Filter in the database
     * @param string $keyword    the keyword to be added to the filter group
     * @param ?bool  $whole_word whether the keyword should consider word boundaries
     */
    public function __construct(
        public string $filter_id,
        public string $keyword,
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
