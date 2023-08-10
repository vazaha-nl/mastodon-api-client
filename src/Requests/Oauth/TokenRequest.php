<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Oauth;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\TokenResult;

/**
 * Obtain a token.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\TokenResult>
 *
 * @see https://docs.joinmastodon.org/methods/oauth/#token
 */
final class TokenRequest extends Request implements RequestInterface
{
    /**
     * @param string  $grant_type    Set equal to `authorization_code` if `code` is provided in order to gain user-level access. Otherwise, set equal to `client_credentials` to obtain app-level access only.
     * @param string  $client_id     the client ID, obtained during app registration
     * @param string  $client_secret the client secret, obtained during app registration
     * @param string  $redirect_uri  Set a URI to redirect the user to. If this parameter is set to urn:ietf:wg:oauth:2.0:oob then the token will be shown instead. Must match one of the `redirect_uris` declared during app registration.
     * @param ?string $code          a user authorization code, obtained via [GET /oauth/authorize](#authorize)
     * @param ?string $scope         List of requested OAuth scopes, separated by spaces (or by pluses, if using query parameters). If `code` was provided, then this must be equal to the `scope` requested from the user. Otherwise, it must be a subset of `scopes` declared during app registration. If not provided, defaults to `read`.
     */
    public function __construct(
        public string $grant_type,
        public string $client_id,
        public string $client_secret,
        public string $redirect_uri,
        public ?string $code = null,
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

    public function getResultClass(): string
    {
        return TokenResult::class;
    }
}
