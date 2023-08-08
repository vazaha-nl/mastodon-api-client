<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Announcements;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View all announcements.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AnnouncementResult>
 *
 * @see https://docs.joinmastodon.org/methods/announcements/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\AnnouncementRequest implements RequestInterface
{
    /**
     * @param ?bool $with_dismissed If true, response will include announcements dismissed by the user. Defaults to false.
     */
    public function __construct(
        public ?bool $with_dismissed = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/announcements';
    }

    public function getQueryParams(): array
    {
        return [
            'with_dismissed' => $this->with_dismissed,
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
}
