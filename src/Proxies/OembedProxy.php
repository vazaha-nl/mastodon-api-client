<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Requests\Oembed\GetRequest;

class OembedProxy extends Proxy
{
    /**
     * Get OEmbed info as JSON.
     *
     * @param string $url       URL of a status
     * @param ?int   $maxwidth  Width of the iframe. Defaults to 400
     * @param ?int   $maxheight Height of the iframe. Defaults to null
     *
     * @see https://docs.joinmastodon.org/methods/oembed/#get
     */
    public function get(
        string $url,
        ?int $maxwidth = null,
        ?int $maxheight = null,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new GetRequest(
            $url,
            $maxwidth,
            $maxheight,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
