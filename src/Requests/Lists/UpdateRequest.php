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
     * @param string  $id             the ID of the list
     * @param string  $title          the title of the list to be created
     * @param ?string $replies_policy One of `followed`, `list`, or `none`. Defaults to `list`.
     * @param ?bool   $exclusive      whether members of this list need to get removed from the “Home” feed
     *
     * @see https://docs.joinmastodon.org/methods/lists/#update
     */
    public function __construct(
        public string $id,
        public string $title,
        public ?string $replies_policy = null,
        public ?bool $exclusive = null,
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
            'exclusive' => $this->exclusive,
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
