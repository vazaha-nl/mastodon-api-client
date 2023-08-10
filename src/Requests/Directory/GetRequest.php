<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Directory;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\AccountResult;

/**
 * View profile directory.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/directory/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param ?int    $offset skip the first n results
     * @param ?int    $limit  How many accounts to load. Defaults to 40 accounts. Max 80 accounts.
     * @param ?string $order  use `active` to sort by most recently posted statuses (default) or `new` to sort by most recently created profiles
     * @param ?bool   $local  if true, returns only local accounts
     */
    public function __construct(
        public ?int $offset = null,
        public ?int $limit = null,
        public ?string $order = null,
        public ?bool $local = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/directory';
    }

    public function getQueryParams(): array
    {
        return [
            'offset' => $this->offset,
            'limit' => $this->limit,
            'order' => $this->order,
            'local' => $this->local,
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return AccountResult::class;
    }
}
