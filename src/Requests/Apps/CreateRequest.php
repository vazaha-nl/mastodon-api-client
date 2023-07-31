<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Apps;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Create an application.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ApplicationResult>
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\ApplicationRequest implements RequestInterface
{
    public function __construct(
        /**
         * A name for your application.
         */
        public string $client_name,

        /**
         * Where the user should be redirected after authorization. To display the
         * authorization code to the user instead of redirecting to a web page, use
         * `urn:ietf:wg:oauth:2.0:oob` in this parameter.
         */
        public string $redirect_uris,

        /**
         * Space separated list of scopes. If none is provided, defaults to `read`.
         * See [OAuth Scopes]({{&lt; relref &quot;api/oauth-scopes&quot; &gt;}}) for a list of
         * possible scopes.
         */
        public ?string $scopes = null,

        /**
         * A URL to the homepage of your app.
         */
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
}
