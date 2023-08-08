<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Dismiss a single notification.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications/#dismiss
 */
final class DismissRequest extends \Vazaha\Mastodon\Requests\EmptyOrUnknownRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Notification in the database.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/notifications/%s/dismiss', urlencode($this->id));
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
