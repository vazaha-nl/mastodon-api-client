<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Approve a pending account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\AccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#approve
 */
final class ApproveRequest extends \Vazaha\Mastodon\Requests\Admin\AccountRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Account in the database.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/admin/accounts/%s/approve', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
