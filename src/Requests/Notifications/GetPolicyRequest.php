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
 * Get the filtering policy for notifications.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\NotificationPolicyResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications/#get-policy
 */
final class GetPolicyRequest extends Request implements RequestInterface
{
    /**
     * @see https://docs.joinmastodon.org/methods/notifications/#get-policy
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
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return NotificationPolicyResult::class;
    }
}
