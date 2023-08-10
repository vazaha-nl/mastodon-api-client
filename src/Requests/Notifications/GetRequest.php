<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\NotificationResult;

/**
 * Get all notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\NotificationResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param ?string            $max_id        Return results older than this ID
     * @param ?string            $since_id      Return results newer than this ID
     * @param ?string            $min_id        Return results immediately newer than this ID
     * @param ?int               $limit         Maximum number of results to return. Defaults to 15 notifications. Max 30 notifications.
     * @param null|array<string> $types         types to include in the result
     * @param null|array<string> $exclude_types types to exclude from the results
     * @param ?string            $account_id    return only notifications received from the specified account
     */
    public function __construct(
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
        public ?int $limit = null,
        public ?array $types = null,
        public ?array $exclude_types = null,
        public ?string $account_id = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/notifications';
    }

    public function getQueryParams(): array
    {
        return [
            'max_id ' => $this->max_id,
            'since_id' => $this->since_id,
            'min_id' => $this->min_id,
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
        return NotificationResult::class;
    }
}
