<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\TokenModel;
use Vazaha\Mastodon\Requests\Oauth\AuthorizeRequest;
use Vazaha\Mastodon\Requests\Oauth\RevokeRequest;
use Vazaha\Mastodon\Requests\Oauth\TokenRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class OauthProxy extends Proxy
{
    /**
     * Authorize a user.
     *
     * @param string  $response_type should be set equal to `code`
     * @param string  $client_id     the client ID, obtained during app registration
     * @param string  $redirect_uri  Set a URI to redirect the user to. If this parameter is set to `urn:ietf:wg:oauth:2.0:oob` then the authorization code will be shown instead. Must match one of the `redirect_uris` declared during app registration.
     * @param ?string $scope         List of requested OAuth scopes, separated by spaces (or by pluses, if using query parameters). Must be a subset of `scopes` declared during app registration. If not provided, defaults to `read`.
     * @param ?bool   $force_login   forces the user to re-login, which is necessary for authorizing with multiple accounts from the same instance
     * @param ?string $lang          the ISO 639-1 two-letter language code to use while rendering the authorization form
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#authorize
     */
    public function authorize(
        string $response_type,
        string $client_id,
        string $redirect_uri,
        ?string $scope = null,
        ?bool $force_login = null,
        ?string $lang = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new AuthorizeRequest(
                $response_type,
                $client_id,
                $redirect_uri,
                $scope,
                $force_login,
                $lang,
            ));

        return $models;
    }

    /**
     * Revoke a token.
     *
     * @param string $client_id     the client ID, obtained during app registration
     * @param string $client_secret the client secret, obtained during app registration
     * @param string $token         the previously obtained token, to be invalidated
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#revoke
     */
    public function revoke(
        string $client_id,
        string $client_secret,
        string $token,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new RevokeRequest(
                $client_id,
                $client_secret,
                $token,
            ));

        return $models;
    }

    /**
     * Obtain a token.
     *
     * @param string  $grant_type    Set equal to `authorization_code` if `code` is provided in order to gain user-level access. Otherwise, set equal to `client_credentials` to obtain app-level access only.
     * @param string  $client_id     the client ID, obtained during app registration
     * @param string  $client_secret the client secret, obtained during app registration
     * @param string  $redirect_uri  Set a URI to redirect the user to. If this parameter is set to urn:ietf:wg:oauth:2.0:oob then the token will be shown instead. Must match one of the `redirect_uris` declared during app registration.
     * @param ?string $code          a user authorization code, obtained via [GET /oauth/authorize](#authorize)
     * @param ?string $scope         List of requested OAuth scopes, separated by spaces (or by pluses, if using query parameters). If `code` was provided, then this must be equal to the `scope` requested from the user. Otherwise, it must be a subset of `scopes` declared during app registration. If not provided, defaults to `read`.
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#token
     */
    public function token(
        string $grant_type,
        string $client_id,
        string $client_secret,
        string $redirect_uri,
        ?string $code = null,
        ?string $scope = null,
    ): TokenModel {
        $result = $this->apiClient->send(new TokenRequest(
            $grant_type,
            $client_id,
            $client_secret,
            $redirect_uri,
            $code,
            $scope,
        ));

        /** @var null|\Vazaha\Mastodon\Models\TokenModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
