<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Lists;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Create a list.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ListResult>
 *
 * @see https://docs.joinmastodon.org/methods/lists/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\ListRequest implements RequestInterface
{
    public function __construct(
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
        return '/api/v1/lists';
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
        return HttpMethod::POST;
    }
}
