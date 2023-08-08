<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Mute account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\RelationshipResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#mute
 */
final class MuteRequest extends \Vazaha\Mastodon\Requests\RelationshipRequest implements RequestInterface
{
    /**
     * @param string $id            the ID of the Account in the database
     * @param ?bool  $notifications mute notifications in addition to statuses? Defaults to true
     * @param ?int   $duration      How long the mute should last, in seconds. Defaults to 0 (indefinite).
     */
    public function __construct(
        public string $id,
        public ?bool $notifications = null,
        public ?int $duration = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s/mute', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'notifications' => $this->notifications,
            'duration' => $this->duration,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
