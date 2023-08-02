<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Get all notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\NotificationResult>
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\NotificationRequest implements RequestInterface
{
    public function __construct(
        /**
         * Return results older than this ID.
         */
        public ?string $max_id = null,

        /**
         * Return results newer than this ID.
         */
        public ?string $since_id = null,

        /**
         * Return results immediately newer than this ID.
         */
        public ?string $min_id = null,

        /**
         * Maximum number of results to return. Defaults to 15 notifications. Max 30
         * notifications.
         */
        public ?int $limit = null,

        /**
         * Types to include in the result.
         *
         * @var null|array<string> $types
         */
        public ?array $types = null,

        /**
         * Types to exclude from the results.
         *
         * @var null|array<string> $exclude_types
         */
        public ?array $exclude_types = null,

        /**
         * Return only notifications received from the specified account.
         */
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
}
