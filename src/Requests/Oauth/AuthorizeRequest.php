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
 * Authorize a user.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/oauth/#authorize
 */
final class AuthorizeRequest extends Request implements RequestInterface
{
    /**
     * @param string  $response_type         should be set equal to `code`
     * @param string  $client_id             the client ID, obtained during app registration
     * @param string  $redirect_uri          Set a URI to redirect the user to. If this parameter is set to `urn:ietf:wg:oauth:2.0:oob` then the authorization code will be shown instead. Must match one of the `redirect_uris` declared during app registration.
     * @param ?string $scope                 List of requested {@link https://docs.joinmastodon.org/api/oauth-scopes OAuth scopes}, separated by spaces (or by pluses, if using query parameters). Must be a subset of `scopes` declared during app registration. If not provided, defaults to `read`.
     * @param ?string $state                 arbitrary value to passthrough to your server when the user authorizes or rejects the authorization request
     * @param ?string $code_challenge        The {@link https://docs.joinmastodon.org/spec/oauth#pkce PKCE code challenge} for the authorization request.
     * @param ?string $code_challenge_method must be `S256`, as this is the only code challenge method that is supported by Mastodon for PKCE
     * @param ?bool   $force_login           forces the user to re-login, which is necessary for authorizing with multiple accounts from the same instance
     * @param ?string $lang                  the ISO 639-1 two-letter language code to use while rendering the authorization form
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#authorize
     */
    public function __construct(
        public string $response_type,
        public string $client_id,
        public string $redirect_uri,
        public ?string $scope = null,
        public ?string $state = null,
        public ?string $code_challenge = null,
        public ?string $code_challenge_method = null,
        public ?bool $force_login = null,
        public ?string $lang = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/oauth/authorize';
    }

    public function getQueryParams(): array
    {
        return [
            'response_type' => $this->response_type,
            'client_id' => $this->client_id,
            'redirect_uri' => $this->redirect_uri,
            'scope' => $this->scope,
            'state' => $this->state,
            'code_challenge' => $this->code_challenge,
            'code_challenge_method' => $this->code_challenge_method,
            'force_login' => $this->force_login,
            'lang' => $this->lang,
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

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
