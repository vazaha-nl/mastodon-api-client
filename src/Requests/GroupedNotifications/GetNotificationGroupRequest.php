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
 * Get a single notification group.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/grouped_notifications/#get-notification-group
 */
final class GetNotificationGroupRequest extends Request implements RequestInterface
{
    /**
     * @param string            $group_key       the group key of the notification group
     * @param null|list<string> $supported_types Notification types to not get fallback representation for even when some is available. Passing this parameter is required to get any notification fallback at all. When this parameter is used, and a notification which type is *not* included in `supported_types` has an available fallback representation, it will be included in the notification group's `fallback` attribute.
     *
     * @see https://docs.joinmastodon.org/methods/grouped_notifications/#get-notification-group
     */
    public function __construct(
        public string $group_key,
        public ?array $supported_types = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v2/notifications/%s', urlencode($this->group_key));
    }

    public function getQueryParams(): array
    {
        return [
            'supported_types' => $this->supported_types,
        ];
    }

    public function getFormParams(): array
    {
        return [];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
