<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Get the number of unread notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications/#unread-count
 */
final class UnreadCountRequest extends Request implements RequestInterface
{
    /**
     * @param ?int              $limit         Maximum number of results to return. Defaults to 100 notifications. Max 1000 notifications.
     * @param null|list<string> $types         types of notifications that should count towards unread notifications
     * @param null|list<string> $exclude_types types of notifications that should not count towards unread notifications
     * @param ?string           $account_id    only count unread notifications received from the specified account
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#unread-count
     */
    public function __construct(
        public ?int $limit = null,
        public ?array $types = null,
        public ?array $exclude_types = null,
        public ?string $account_id = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/notifications/unread_count';
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
            'types' => $this->types,
            'exclude_types' => $this->exclude_types,
            'account_id' => $this->account_id,
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
