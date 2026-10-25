<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\NotificationResult;

/**
 * Get a single notification.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\NotificationResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications/#get-one
 */
final class GetOneRequest extends Request implements RequestInterface
{
    /**
     * @param string            $id              the ID of the Notification in the database
     * @param null|list<string> $supported_types Notification types to not get fallback representation for even when some is available. Passing this parameter is required to get any notification fallback at all. When this parameter is used, and a notification which type is *not* included in `supported_types` has an available fallback representation, it will be included in the notification's `fallback` attribute.
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#get-one
     */
    public function __construct(
        public string $id,
        public ?array $supported_types = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/notifications/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
            'supported_types' => $this->supported_types,
        ];
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
        return NotificationResult::class;
    }
}
