<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\FollowRequests;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\RelationshipResult;

/**
 * Reject follow request.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\RelationshipResult>
 *
 * @see https://docs.joinmastodon.org/methods/follow_requests/#reject
 */
final class RejectRequest extends Request implements RequestInterface
{
    /**
     * @param string $account_id the ID of the Account in the database
     */
    public function __construct(
        public string $account_id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/follow_requests/%s/reject', urlencode($this->account_id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return RelationshipResult::class;
    }
}
