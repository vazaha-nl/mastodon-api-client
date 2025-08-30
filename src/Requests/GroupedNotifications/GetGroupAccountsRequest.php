<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\GroupedNotifications;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\AccountResult;

/**
 * Get accounts of all notifications in a notification group.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/grouped_notifications/#get-group-accounts
 */
final class GetGroupAccountsRequest extends Request implements RequestInterface
{
    /**
     * @param string $group_key the group key of the notifications to get accounts from
     *
     * @see https://docs.joinmastodon.org/methods/grouped_notifications/#get-group-accounts
     */
    public function __construct(
        public string $group_key,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v2/notifications/%s/accounts', urlencode($this->group_key));
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
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return AccountResult::class;
    }
}
