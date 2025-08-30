<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Apps;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\CredentialApplicationResult;

/**
 * Create an application.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\CredentialApplicationResult>
 *
 * @see https://docs.joinmastodon.org/methods/apps/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param string       $client_name   A name for your application
     * @param list<string> $redirect_uris Where the user should be redirected after authorization. To display the authorization code to the user instead of redirecting to a web page, use `urn:ietf:wg:oauth:2.0:oob` in this parameter.
     * @param ?string      $scopes        Space separated list of scopes. If none is provided, defaults to `read`. See {@link https://docs.joinmastodon.org/api/oauth-scopes OAuth Scopes} for a list of possible scopes.
     * @param ?string      $website       A URL to the homepage of your app
     *
     * @see https://docs.joinmastodon.org/methods/apps/#create
     */
    public function __construct(
        public string $client_name,
        public array $redirect_uris = [],
        public ?string $scopes = null,
        public ?string $website = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/apps';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'client_name' => $this->client_name,
            'redirect_uris' => $this->redirect_uris,
            'scopes' => $this->scopes,
            'website' => $this->website,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return CredentialApplicationResult::class;
    }
}
