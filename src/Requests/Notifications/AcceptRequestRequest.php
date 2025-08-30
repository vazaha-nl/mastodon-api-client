<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\NotificationRequestResult;

/**
 * Accept a single notification request.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\NotificationRequestResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications/#accept-request
 */
final class AcceptRequestRequest extends Request implements RequestInterface
{
    /**
     * @param string $id the ID of the Notification in the database
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#accept-request
     */
    public function __construct(
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/notifications/requests/%s', urlencode($this->id));
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
        return NotificationRequestResult::class;
    }
}
