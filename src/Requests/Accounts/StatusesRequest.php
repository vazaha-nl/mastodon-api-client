<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\StatusResult;

/**
 * Get account's statuses.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#statuses
 */
final class StatusesRequest extends Request implements RequestInterface
{
    /**
     * @param string  $id              the ID of the Account in the database
     * @param ?string $max_id          Return results older than this ID
     * @param ?string $since_id        Return results newer than this ID
     * @param ?string $min_id          Return results immediately newer than this ID
     * @param ?int    $limit           Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     * @param ?bool   $only_media      filter out statuses without attachments
     * @param ?bool   $exclude_replies filter out statuses in reply to a different account
     * @param ?bool   $exclude_reblogs filter out boosts from the response
     * @param ?bool   $pinned          Filter for pinned statuses only. Defaults to false, which includes all statuses. Pinned statuses do not receive special priority in the order of the returned results.
     * @param ?string $tagged          filter for statuses using a specific hashtag
     */
    public function __construct(
        public string $id,
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
        public ?int $limit = null,
        public ?bool $only_media = null,
        public ?bool $exclude_replies = null,
        public ?bool $exclude_reblogs = null,
        public ?bool $pinned = null,
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

    public function getResultClass(): string
    {
        return StatusResult::class;
    }
}
