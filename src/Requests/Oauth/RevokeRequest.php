<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Oauth;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Revoke a token.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyResultResult>
 */
final class RevokeRequest extends \Vazaha\Mastodon\Requests\EmptyResultRequest implements RequestInterface
{
    public function __construct(
        /**
         * The client ID, obtained during app registration.
         */
        public string $client_id,

        /**
         * The client secret, obtained during app registration.
         */
        public string $client_secret,

        /**
         * The previously obtained token, to be invalidated.
         */
        public string $token,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/oauth/revoke';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'token' => $this->token,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
