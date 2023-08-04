<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Requests\Proofs\GetRequest;

class ProofsProxy extends Proxy
{
    /**
     * (REMOVED) View identity proofs.
     *
     * @param ?string $provider The identity provider to be looked up. Currently only supports `keybase` (case-sensitive).
     * @param ?string $username the username on the selected identity provider
     */
    public function get(
        ?string $provider = null,
        ?string $username = null,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new GetRequest(
            $provider,
            $username,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
