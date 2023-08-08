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
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FilterResult>
 *
 * @see https://docs.joinmastodon.org/methods/filters/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\FilterRequest implements RequestInterface
{
    public function __construct(
        /**
         * The name of the filter group.
         */
        public string $title,

        /**
         * Where the filter should be applied. Specify at least one of `home`,
         * `notifications`, `public`, `thread`, `account`.
         *
         * @var array<string> $context
         */
        public array $context,

        /**
         * The policy to be applied when the filter is matched. Specify `warn` or
         * `hide`.
         */
        public ?string $filter_action = null,

        /**
         * How many seconds from now should the filter expire?
         */
        public ?int $expires_in = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v2/filters';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'title' => $this->title,
            'context' => $this->context,
            'filter_action' => $this->filter_action,
            'expires_in' => $this->expires_in,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
