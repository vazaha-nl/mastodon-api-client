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
     * @param string  $response_type should be set equal to `code`
     * @param string  $client_id     the client ID, obtained during app registration
     * @param string  $redirect_uri  Set a URI to redirect the user to. If this parameter is set to `urn:ietf:wg:oauth:2.0:oob` then the authorization code will be shown instead. Must match one of the `redirect_uris` declared during app registration.
     * @param ?string $scope         List of requested OAuth scopes, separated by spaces (or by pluses, if using query parameters). Must be a subset of `scopes` declared during app registration. If not provided, defaults to `read`.
     * @param ?bool   $force_login   forces the user to re-login, which is necessary for authorizing with multiple accounts from the same instance
     * @param ?string $lang          the ISO 639-1 two-letter language code to use while rendering the authorization form
     */
    public function __construct(
        public string $response_type,
        public string $client_id,
        public string $redirect_uri,
        public ?string $scope = null,
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
