<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Lists;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ListResult;

/**
 * Update a list.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ListResult>
 *
 * @see https://docs.joinmastodon.org/methods/lists/#update
 */
final class UpdateRequest extends Request implements RequestInterface
{
    /**
     * @param string  $id             the ID of the List in the database
     * @param string  $title          the title of the list to be created
     * @param ?string $replies_policy One of `followed`, `list`, or `none`. Defaults to `list`.
     */
    public function __construct(
        public string $id,
        public string $title,
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

    public function getResultClass(): string
    {
        return ListResult::class;
    }
}
