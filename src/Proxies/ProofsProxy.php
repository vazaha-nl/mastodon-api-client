<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\Proofs\GetRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class ProofsProxy extends Proxy
{
    /**
     * (REMOVED) View identity proofs.
     *
     * @param ?string $provider The identity provider to be looked up. Currently only supports `keybase` (case-sensitive).
     * @param ?string $username the username on the selected identity provider
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/proofs/#get
     */
    public function get(
        ?string $provider = null,
        ?string $username = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $provider,
                $username,
            ));

        return $models;
    }
}
