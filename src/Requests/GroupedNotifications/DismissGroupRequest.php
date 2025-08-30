<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\GroupedNotifications;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Dismiss a single notification group.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/grouped_notifications/#dismiss-group
 */
final class DismissGroupRequest extends Request implements RequestInterface
{
    /**
     * @param string $group_key the group key of the notifications to discard
     *
     * @see https://docs.joinmastodon.org/methods/grouped_notifications/#dismiss-group
     */
    public function __construct(
        public string $group_key,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v2/notifications/%s/dismiss', urlencode($this->group_key));
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

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
