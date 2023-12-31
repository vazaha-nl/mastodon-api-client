<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\PreferencesModel;
use Vazaha\Mastodon\Requests\Preferences\GetRequest;

class PreferencesProxy extends Proxy
{
    /**
     * View user preferences.
     *
     * @see https://docs.joinmastodon.org/methods/preferences/#get
     */
    public function get(
    ): PreferencesModel {
        $result = $this->apiClient->send(new GetRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\PreferencesModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
