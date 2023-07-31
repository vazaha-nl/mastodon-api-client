<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Lists;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Update a list.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ListResult>
 */
final class UpdateRequest extends \Vazaha\Mastodon\Requests\ListRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the List in the database.
         */
        public string $id,

        /**
         * The title of the list to be created.
         */
        public string $title,

        /**
         * One of `followed`, `list`, or `none`. Defaults to `list`.
         */
        public ?string $replies_policy = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/lists/%s', urlencode($this->id));
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
            'replies_policy' => $this->replies_policy,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
