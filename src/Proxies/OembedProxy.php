<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Requests\Oembed\GetRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class OembedProxy extends Proxy
{
    /**
     * Get OEmbed info as JSON.
     *
     * @param string $url       URL of a status
     * @param ?int   $maxwidth  Width of the iframe. Defaults to 400
     * @param ?int   $maxheight Height of the iframe. Defaults to null
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/oembed/#get
     */
    public function get(
        string $url,
        ?int $maxwidth = null,
        ?int $maxheight = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $url,
                $maxwidth,
                $maxheight,
            ));

        return $models;
    }
}
