<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\FollowRequests;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Accept follow request.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\RelationshipResult>
 *
 * @see https://docs.joinmastodon.org/methods/follow_requests/#accept
 */
final class AcceptRequest extends \Vazaha\Mastodon\Requests\RelationshipRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Account in the database.
         */
        public string $account_id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/follow_requests/%s/authorize', urlencode($this->account_id));
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
}
