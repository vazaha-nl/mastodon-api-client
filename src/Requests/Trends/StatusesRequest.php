<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Trends;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\StatusResult;

/**
 * View trending statuses.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/trends/#statuses
 */
final class StatusesRequest extends Request implements RequestInterface
{
    /**
     * @param ?int $limit  Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     * @param ?int $offset skip the first n results
     */
    public function __construct(
        public ?int $limit = null,
        public ?int $offset = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/trends/statuses';
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
            'offset' => $this->offset,
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
