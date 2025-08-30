<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\CredentialAccountModel;
use Vazaha\Mastodon\Requests\Profile\DeleteRequest;

class ProfileProxy extends Proxy
{
    /**
     * Delete profile avatar.
     *
     * @see https://docs.joinmastodon.org/methods/profile/#delete
     */
    public function delete(
    ): CredentialAccountModel {
        $result = $this->apiClient->send(new DeleteRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\CredentialAccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
