<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\AccountResult;

/**
 * See who boosted a status.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#reblogged_by
 */
final class RebloggedByRequest extends Request implements RequestInterface
{
    /**
     * @param string $id    the ID of the Status in the database
     * @param ?int   $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     */
    public function __construct(
        public string $id,
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s/reblogged_by', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
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
        return AccountResult::class;
    }
}
