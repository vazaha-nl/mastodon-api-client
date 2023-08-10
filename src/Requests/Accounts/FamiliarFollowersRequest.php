<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\FamiliarFollowersResult;

/**
 * Find familiar followers.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\FamiliarFollowersResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#familiar_followers
 */
final class FamiliarFollowersRequest extends Request implements RequestInterface
{
    /**
     * @param null|array<string> $id find familiar followers for the provided account IDs
     */
    public function __construct(
        public ?array $id = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/accounts/familiar_followers';
    }

    public function getQueryParams(): array
    {
        return [
            'id' => $this->id,
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
        return FamiliarFollowersResult::class;
    }
}
