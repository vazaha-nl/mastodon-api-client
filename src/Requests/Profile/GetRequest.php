<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Profile;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ProfileResult;

/**
 * Get current user profile.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ProfileResult>
 *
 * @see https://docs.joinmastodon.org/methods/profile/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @see https://docs.joinmastodon.org/methods/profile/#get
     */
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/profile';
    }

    public function getQueryParams(): array
    {
        return [];
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
        return ProfileResult::class;
    }
}
