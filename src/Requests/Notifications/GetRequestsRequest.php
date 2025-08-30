<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\NotificationPolicyResult;

/**
 * Get all notification requests.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\NotificationPolicyResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications/#get-requests
 */
final class GetRequestsRequest extends Request implements RequestInterface
{
    /**
     * @see https://docs.joinmastodon.org/methods/notifications/#get-requests
     */
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v2/notifications/policy';
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
        return HttpMethod::PATCH;
    }

    public function getResultClass(): string
    {
        return NotificationPolicyResult::class;
    }
}
