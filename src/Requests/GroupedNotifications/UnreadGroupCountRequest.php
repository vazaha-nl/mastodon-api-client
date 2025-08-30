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
 * Get the number of unread notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/grouped_notifications/#unread-group-count
 */
final class UnreadGroupCountRequest extends Request implements RequestInterface
{
    /**
     * @param ?int              $limit         Maximum number of results to return. Defaults to 100 notifications. Max 1000 notifications.
     * @param null|list<string> $types         types of notifications that should count towards unread notifications
     * @param null|list<string> $exclude_types types of notifications that should not count towards unread notifications
     * @param ?string           $account_id    only count unread notifications received from the specified account
     * @param null|list<string> $grouped_types Restrict which notification types can be grouped. Use this if there are notification types for which your client does not support grouping. If omitted, the server will group notifications of all types it supports (currently, `favourite`, `follow` and `reblog`). If you do not want any notification grouping, use {@link https://docs.joinmastodon.org/methods/notifications#unread-count GET `/api/v1/notifications/unread_count`} instead.
     *
     * @see https://docs.joinmastodon.org/methods/grouped_notifications/#unread-group-count
     */
    public function __construct(
        public ?int $limit = null,
        public ?array $types = null,
        public ?array $exclude_types = null,
        public ?string $account_id = null,
        public ?array $grouped_types = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v2/notifications/unread_count';
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
            'types' => $this->types,
            'exclude_types' => $this->exclude_types,
            'account_id' => $this->account_id,
            'grouped_types' => $this->grouped_types,
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
        return EmptyOrUnknownResult::class;
    }
}
