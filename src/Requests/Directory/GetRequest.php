<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Directory;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View profile directory.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\AccountRequest implements RequestInterface
{
    public function __construct(
        /**
         * Skip the first n results.
         */
        public ?int $offset = null,

        /**
         * How many accounts to load. Defaults to 40 accounts. Max 80 accounts.
         */
        public ?int $limit = null,

        /**
         * Use `active` to sort by most recently posted statuses (default) or `new` to
         * sort by most recently created profiles.
         */
        public ?string $order = null,

        /**
         * If true, returns only local accounts.
         */
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
}
