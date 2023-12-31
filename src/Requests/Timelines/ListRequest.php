<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Timelines;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\StatusResult;

/**
 * View list timeline.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/timelines/#list
 */
final class ListRequest extends Request implements RequestInterface
{
    /**
     * @param string  $list_id  local ID of the List in the database
     * @param ?string $max_id   return results older than ID
     * @param ?string $since_id return results newer than ID
     * @param ?string $min_id   return results immediately newer than ID
     * @param ?int    $limit    Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     */
    public function __construct(
        public string $list_id,
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/timelines/list/%s', urlencode($this->list_id));
    }

    public function getQueryParams(): array
    {
        return [
            'max_id ' => $this->max_id,
            'since_id' => $this->since_id,
            'min_id' => $this->min_id,
            'limit' => $this->limit,
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
