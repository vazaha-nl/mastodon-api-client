<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Filters;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Update a filter.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\V1\FilterResult>
 *
 * @see https://docs.joinmastodon.org/methods/filters/#update-v1
 */
final class UpdateV1Request extends \Vazaha\Mastodon\Requests\V1\FilterRequest implements RequestInterface
{
    /**
     * @param string        $id           the ID of the FilterKeyword in the database
     * @param string        $phrase       the text to be filtered
     * @param array<string> $context      specify at least one of `home`, `notifications`, `public`, `thread`, `account`
     * @param ?bool         $irreversible should the server irreversibly drop matching entities from home and notifications? Defaults to false
     * @param ?bool         $whole_word   should the filter consider word boundaries? Defaults to false
     * @param ?int          $expires_in   Number of seconds from now that the filter should expire. Otherwise, `null` for a filter that doesn't expire.
     */
    public function __construct(
        public string $id,
        public string $phrase,
        public array $context,
        public ?bool $irreversible = null,
        public ?bool $whole_word = null,
        public ?int $expires_in = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/filters/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'phrase' => $this->phrase,
            'context' => $this->context,
            'irreversible' => $this->irreversible,
            'whole_word' => $this->whole_word,
            'expires_in' => $this->expires_in,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
