<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Filters;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Create a filter.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\V1\FilterResult>
 */
final class CreateV1Request extends \Vazaha\Mastodon\Requests\V1\FilterRequest implements RequestInterface
{
    public function __construct(
        /**
         * The text to be filtered.
         */
        public string $phrase,

        /**
         * Where the filter should be applied. Specify at least one of `home`,
         * `notifications`, `public`, `thread`, `account`.
         *
         * @var array<string> $context
         */
        public array $context,

        /**
         * Should the server irreversibly drop matching entities from home and
         * notifications? Defaults to false.
         */
        public ?bool $irreversible = null,

        /**
         * Should the filter consider word boundaries for this keyword? Defaults to
         * false.
         */
        public ?bool $whole_word = null,

        /**
         * Number of seconds from now that the filter should expire. Otherwise, `null`
         * for a filter that doesn&#039;t expire.
         */
        public ?int $expires_in = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/filters';
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
        return HttpMethod::POST;
    }
}
