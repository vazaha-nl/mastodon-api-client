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
 * View home timeline.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/timelines/#home
 */
final class HomeRequest extends Request implements RequestInterface
{
    /**
     * @param ?string $max_id          All results returned will be lesser than this ID. In effect, sets an upper bound on results.
     * @param ?string $since_id        All results returned will be greater than this ID. In effect, sets a lower bound on results.
     * @param ?string $min_id          Returns results immediately newer than this ID. In effect, sets a cursor at this ID and paginates forward.
     * @param ?int    $limit           Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     * @param ?bool   $exclude_direct  whether to exclude Direct Messages from the response
     * @param ?bool   $exclude_reblogs whether to exclude reblogs from the response
     * @param ?bool   $exclude_quotes  whether to exclude quote posts from the response
     * @param ?bool   $exclude_replies whether to exclude replies from the response
     *
     * @see https://docs.joinmastodon.org/methods/timelines/#home
     */
    public function __construct(
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
        public ?int $limit = null,
        public ?bool $exclude_direct = null,
        public ?bool $exclude_reblogs = null,
        public ?bool $exclude_quotes = null,
        public ?bool $exclude_replies = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/timelines/home';
    }

    public function getQueryParams(): array
    {
        return [
            'max_id' => $this->max_id,
            'since_id' => $this->since_id,
            'min_id' => $this->min_id,
            'limit' => $this->limit,
            'exclude_direct' => $this->exclude_direct,
            'exclude_reblogs' => $this->exclude_reblogs,
            'exclude_quotes' => $this->exclude_quotes,
            'exclude_replies' => $this->exclude_replies,
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
        return StatusResult::class;
    }
}
