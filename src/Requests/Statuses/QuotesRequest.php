<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\StatusResult;

/**
 * See quotes of a status.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#quotes
 */
final class QuotesRequest extends Request implements RequestInterface
{
    /**
     * @param string $id    the ID of the Status in the database
     * @param ?int   $limit Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#quotes
     */
    public function __construct(
        public string $id,
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s/quotes', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
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
