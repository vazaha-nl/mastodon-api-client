<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Filters;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Edit a keyword within a filter.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FilterKeywordResult>
 *
 * @see https://docs.joinmastodon.org/methods/filters/#keywords-update
 */
final class KeywordsUpdateRequest extends \Vazaha\Mastodon\Requests\FilterKeywordRequest implements RequestInterface
{
    /**
     * @param string $id         the ID of the FilterKeyword in the database
     * @param string $keyword    the keyword to be added to the filter group
     * @param ?bool  $whole_word whether the keyword should consider word boundaries
     */
    public function __construct(
        public string $id,
        public string $keyword,
        public ?bool $whole_word = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v2/filters/keywords/%s', urlencode($this->id));
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
        return HttpMethod::PUT;
    }
}
