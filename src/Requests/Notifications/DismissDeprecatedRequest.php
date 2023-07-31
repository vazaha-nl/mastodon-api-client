<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * (REMOVED) Dismiss a single notification.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyResultResult>
 */
final class DismissDeprecatedRequest extends \Vazaha\Mastodon\Requests\EmptyResultRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the notification in the database.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/notifications/dismiss';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'id' => $this->id,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
