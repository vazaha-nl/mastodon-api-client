<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Announcements;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Remove a reaction from an announcement.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/announcements/#delete-reactions
 */
final class DeleteReactionsRequest extends Request implements RequestInterface
{
    /**
     * @param string $id   the ID of the Announcement in the database
     * @param string $name unicode emoji, or the shortcode of a custom emoji
     */
    public function __construct(
        public string $id,
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

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
