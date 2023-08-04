<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\ApplicationModel;
use Vazaha\Mastodon\Requests\Apps\CreateRequest;
use Vazaha\Mastodon\Requests\Apps\VerifyCredentialsRequest;

class AppsProxy extends Proxy
{
    /**
     * Verify your app works.
     */
    public function verifyCredentials(
    ): ApplicationModel {
        $result = $this->apiClient->send(new VerifyCredentialsRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\ApplicationModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Create an application.
     *
     * @param string  $client_name   A name for your application
     * @param string  $redirect_uris Where the user should be redirected after authorization. To display the authorization code to the user instead of redirecting to a web page, use `urn:ietf:wg:oauth:2.0:oob` in this parameter.
     * @param ?string $scopes        Space separated list of scopes. If none is provided, defaults to `read`. See [OAuth Scopes]({{< relref "api/oauth-scopes" >}}) for a list of possible scopes.
     * @param ?string $website       A URL to the homepage of your app
     */
    public function create(
        string $client_name,
        string $redirect_uris,
        ?string $scopes = null,
        ?string $website = null,
    ): ApplicationModel {
        $result = $this->apiClient->send(new CreateRequest(
            $client_name,
            $redirect_uris,
            $scopes,
            $website,
        ));

        /** @var null|\Vazaha\Mastodon\Models\ApplicationModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
