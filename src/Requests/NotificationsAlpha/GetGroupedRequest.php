<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\NotificationsAlpha;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Get all grouped notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications_alpha/#get-grouped
 */
final class GetGroupedRequest extends Request implements RequestInterface
{
    /**
     * @param ?string           $max_id          All results returned will be about notifications strictly older than this notification ID. In effect, sets an upper bound on results.
     * @param ?string           $since_id        All results returned will be about notifications strictly newer than this notification ID. In effect, sets a lower bound on results.
     * @param ?string           $min_id          Returns results about notifications immediately newer than this notification ID. In effect, sets a cursor at this ID and paginates forward.
     * @param ?int              $limit           Maximum number of results to return. Defaults to 40 notifications. Max 80 notification groups.
     * @param null|list<string> $types           types to include in the result
     * @param null|list<string> $exclude_types   types to exclude from the results
     * @param ?string           $account_id      return only notifications received from the specified account
     * @param ?string           $expand_accounts One of `full` (default) or `partial_avatars`. When set to `partial_avatars`, some accounts will not be rendered in full in the returned `accounts` list but will be instead returned in stripped-down form in the `partial_accounts` list. The most recent account in a notification group is always rendered in full in the `accounts` attribute.
     * @param null|list<string> $grouped_types   Restrict which notification types can be grouped. Use this if there are notification types for which your client does not support grouping. If omitted, the server will group notifications of all types it supports (currently, `favourite` and `reblog`). If you do not want any notification grouping, use {@link https://docs.joinmastodon.org/methods/notifications#get GET `/api/v1/notifications`} instead.
     *
     * @see https://docs.joinmastodon.org/methods/notifications_alpha/#get-grouped
     */
    public function __construct(
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
        public ?int $limit = null,
        public ?array $types = null,
        public ?array $exclude_types = null,
        public ?string $account_id = null,
        public ?string $expand_accounts = null,
        public ?array $grouped_types = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v2_alpha/notifications';
    }

    public function getQueryParams(): array
    {
        return [
            'max_id' => $this->max_id,
            'since_id' => $this->since_id,
            'min_id' => $this->min_id,
            'limit' => $this->limit,
            'types' => $this->types,
            'exclude_types' => $this->exclude_types,
            'account_id' => $this->account_id,
            'expand_accounts' => $this->expand_accounts,
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
