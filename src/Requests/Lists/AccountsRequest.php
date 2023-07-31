<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Lists;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View accounts in a list.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class AccountsRequest extends \Vazaha\Mastodon\Requests\AccountRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the List in the database.
         */
        public string $id,

        /**
         * Maximum number of results. Defaults to 40 accounts. Max 80 accounts. Set to
         * 0 in order to get all accounts without pagination.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/lists/%s/accounts', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
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
