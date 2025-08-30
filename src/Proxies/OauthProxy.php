<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\TokenModel;
use Vazaha\Mastodon\Requests\Oauth\AuthorizationServerMetadataRequest;
use Vazaha\Mastodon\Requests\Oauth\AuthorizeRequest;
use Vazaha\Mastodon\Requests\Oauth\RevokeRequest;
use Vazaha\Mastodon\Requests\Oauth\TokenRequest;
use Vazaha\Mastodon\Requests\Oauth\UserinfoRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class OauthProxy extends Proxy
{
    /**
     * Discover OAuth Server Configuration.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#authorization-server-metadata
     */
    public function authorizationServerMetadata(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new AuthorizationServerMetadataRequest(
            ));

        return $models;
    }

    /**
     * Authorize a user.
     *
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
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#authorize
     */
    public function authorize(
        string $response_type,
        string $client_id,
        string $redirect_uri,
        ?string $scope = null,
        ?string $state = null,
        ?string $code_challenge = null,
        ?string $code_challenge_method = null,
        ?bool $force_login = null,
        ?string $lang = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new AuthorizeRequest(
                $response_type,
                $client_id,
                $redirect_uri,
                $scope,
                $state,
                $code_challenge,
                $code_challenge_method,
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
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#revoke
     */
    public function revoke(
        string $client_id,
        string $client_secret,
        string $token,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
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
     * @param string  $code          A user authorization code, obtained from the redirect after an Authorization request is approved. May alternatively be displayed to the user if `urn:ietf:wg:oauth:2.0:oob` is used as the `redirect_uri`.
     * @param string  $client_id     the client ID, obtained during app registration
     * @param string  $client_secret the client secret, obtained during app registration
     * @param string  $redirect_uri  must match the `redirect_uri` used during the Authorization request
     * @param ?string $code_verifier Required if {@link https://docs.joinmastodon.org/spec/oauth#pkce PKCE} is used during the authorization request. This is the code verifier which was used to create the `code_challenge` using the `code_challenge_method` for the authorization request.
     * @param ?string $scope         When `grant_type` is set to `client_credentials`, the list of requested OAuth scopes, separated by spaces (or pluses, if using query parameters). Must be a subset of the scopes requested at the time the application was created. If omitted, it defaults to `read`. Has no effect when `grant_type` is `authorization_code`.
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#token
     */
    public function token(
        string $grant_type,
        string $code,
        string $client_id,
        string $client_secret,
        string $redirect_uri,
        ?string $code_verifier = null,
        ?string $scope = null,
    ): TokenModel {
        $result = $this->apiClient->send(new TokenRequest(
            $grant_type,
            $code,
            $client_id,
            $client_secret,
            $redirect_uri,
            $code_verifier,
            $scope,
        ));

        /** @var null|\Vazaha\Mastodon\Models\TokenModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Retrieve user information.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/oauth/#userinfo
     */
    public function userinfo(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new UserinfoRequest(
            ));

        return $models;
    }
}
