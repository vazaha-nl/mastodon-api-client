<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Oauth;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Obtain a token.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\TokenResult>
 */
final class TokenRequest extends \Vazaha\Mastodon\Requests\TokenRequest implements RequestInterface
{
    public function __construct(
        /**
         * Set equal to `authorization_code` if `code` is provided in order to gain
         * user-level access. Otherwise, set equal to `client_credentials` to obtain
         * app-level access only.
         */
        public string $grant_type,

        /**
         * A user authorization code, obtained via [GET /oauth/authorize](#authorize).
         */
        public ?string $code,

        /**
         * The client ID, obtained during app registration.
         */
        public string $client_id,

        /**
         * The client secret, obtained during app registration.
         */
        public string $client_secret,

        /**
         * Set a URI to redirect the user to. If this parameter is set to
         * urn:ietf:wg:oauth:2.0:oob then the token will be shown instead. Must match
         * one of the `redirect_uris` declared during app registration.
         */
        public string $redirect_uri,

        /**
         * List of requested OAuth scopes, separated by spaces (or by pluses, if using
         * query parameters). If `code` was provided, then this must be equal to the
         * `scope` requested from the user. Otherwise, it must be a subset of `scopes`
         * declared during app registration. If not provided, defaults to `read`.
         */
        public ?string $scope = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/oauth/token';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'grant_type' => $this->grant_type,
            'code' => $this->code,
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'redirect_uri' => $this->redirect_uri,
            'scope' => $this->scope,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
