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
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FilterResult>
 */
final class UpdateRequest extends \Vazaha\Mastodon\Requests\FilterRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Filter in the database.
         */
        public string $id,

        /**
         * The name of the filter group.
         */
        public ?string $title = null,

        /**
         * Where the filter should be applied. Specify at least one of `home`,
         * `notifications`, `public`, `thread`, `account`.
         *
         * @var null|array<string> $context
         */
        public ?array $context = null,

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
        return sprintf('/api/v2/filters/%s', urlencode($this->id));
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
        return HttpMethod::PUT;
    }
}
