<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Get account&#039;s statuses.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#statuses
 */
final class StatusesRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Account in the database.
         */
        public string $id,

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
         * Maximum number of results to return. Defaults to 20 statuses. Max 40
         * statuses.
         */
        public ?int $limit = null,

        /**
         * Filter out statuses without attachments.
         */
        public ?bool $only_media = null,

        /**
         * Filter out statuses in reply to a different account.
         */
        public ?bool $exclude_replies = null,

        /**
         * Filter out boosts from the response.
         */
        public ?bool $exclude_reblogs = null,

        /**
         * Filter for pinned statuses only. Defaults to false, which includes all
         * statuses. Pinned statuses do not receive special priority in the order of
         * the returned results.
         */
        public ?bool $pinned = null,

        /**
         * Filter for statuses using a specific hashtag.
         */
        public ?string $tagged = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s/statuses', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
            'max_id ' => $this->max_id,
            'since_id' => $this->since_id,
            'min_id' => $this->min_id,
            'limit' => $this->limit,
            'only_media' => $this->only_media,
            'exclude_replies' => $this->exclude_replies,
            'exclude_reblogs' => $this->exclude_reblogs,
            'pinned' => $this->pinned,
            'tagged' => $this->tagged,
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
