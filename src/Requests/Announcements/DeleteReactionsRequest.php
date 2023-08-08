<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Announcements;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Remove a reaction from an announcement.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/announcements/#delete-reactions
 */
final class DeleteReactionsRequest extends \Vazaha\Mastodon\Requests\EmptyOrUnknownRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Announcement in the database.
         */
        public string $id,

        /**
         * Unicode emoji, or the shortcode of a custom emoji.
         */
        public string $name,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/announcements/%s/reactions/%s', urlencode($this->id), urlencode($this->name));
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
        return HttpMethod::DELETE;
    }
}
