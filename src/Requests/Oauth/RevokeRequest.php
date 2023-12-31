<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Oauth;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Revoke a token.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/oauth/#revoke
 */
final class RevokeRequest extends Request implements RequestInterface
{
    /**
     * @param string $client_id     the client ID, obtained during app registration
     * @param string $client_secret the client secret, obtained during app registration
     * @param string $token         the previously obtained token, to be invalidated
     */
    public function __construct(
        public string $client_id,
        public string $client_secret,
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

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
