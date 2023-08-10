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
 * Create a list.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ListResult>
 *
 * @see https://docs.joinmastodon.org/methods/lists/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param string  $title          the title of the list to be created
     * @param ?string $replies_policy One of `followed`, `list`, or `none`. Defaults to `list`.
     */
    public function __construct(
        public string $title,
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

    public function getResultClass(): string
    {
        return ListResult::class;
    }
}
