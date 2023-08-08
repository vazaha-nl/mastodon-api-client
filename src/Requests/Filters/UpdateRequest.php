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
 *
 * @see https://docs.joinmastodon.org/methods/filters/#update
 */
final class UpdateRequest extends \Vazaha\Mastodon\Requests\FilterRequest implements RequestInterface
{
    /**
     * @param string             $id                  the ID of the Filter in the database
     * @param ?string            $title               the name of the filter group
     * @param null|array<string> $context             Where the filter should be applied. Specify at least one of `home`, `notifications`, `public`, `thread`, `account`.
     * @param ?string            $filter_action       The policy to be applied when the filter is matched. Specify `warn` or `hide`.
     * @param ?int               $expires_in          How many seconds from now should the filter expire?
     * @param null|mixed[]       $keywords_attributes keywords_attributes[][keyword]: A keyword to be added to the newly-created filter group
     */
    public function __construct(
        public string $id,
        public ?string $title = null,
        public ?array $context = null,
        public ?string $filter_action = null,
        public ?int $expires_in = null,
        public ?array $keywords_attributes = null,
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
            'keywords_attributes' => $this->keywords_attributes,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
