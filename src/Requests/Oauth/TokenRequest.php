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
     * @param string  $code          A user authorization code, obtained from the redirect after an Authorization request is approved. May alternatively be displayed to the user if `urn:ietf:wg:oauth:2.0:oob` is used as the `redirect_uri`.
     * @param string  $client_id     the client ID, obtained during app registration
     * @param string  $client_secret the client secret, obtained during app registration
     * @param string  $redirect_uri  must match the `redirect_uri` used during the Authorization request
     * @param ?string $code_verifier Required if {@link https://docs.joinmastodon.org/spec/oauth#pkce PKCE} is used during the authorization request. This is the code verifier which was used to create the `code_challenge` using the `code_challenge_method` for the authorization request.
     * @param ?string $scope         When `grant_type` is set to `client_credentials`, the list of requested OAuth scopes, separated by spaces (or pluses, if using query parameters). Must be a subset of the scopes requested at the time the application was created. If omitted, it defaults to `read`. Has no effect when `grant_type` is `authorization_code`.
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#token
     */
    public function __construct(
        public string $grant_type,
        public string $code,
        public string $client_id,
        public string $client_secret,
        public string $redirect_uri,
        public ?string $code_verifier = null,
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
            'code_verifier' => $this->code_verifier,
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
