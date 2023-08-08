<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Markers;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Save your position in a timeline.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\MarkerResult>
 *
 * @see https://docs.joinmastodon.org/methods/markers/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\MarkerRequest implements RequestInterface
{
    public function __construct(
        /**
         * home[last_read_id]: ID of the last status read in the home timeline.
         *
         * @var null|mixed[] $home
         */
        public ?array $home = null,

        /**
         * notifications[last_read_id]: ID of the last notification read.
         *
         * @var null|mixed[] $notifications
         */
        public ?array $notifications = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/markers';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'home' => $this->home,
            'notifications' => $this->notifications,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
