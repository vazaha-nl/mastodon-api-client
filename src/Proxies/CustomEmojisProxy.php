<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\CustomEmojis\GetRequest;
use Vazaha\Mastodon\Results\CustomEmojiResult;

class CustomEmojisProxy extends Proxy
{
    /**
     * View all custom emoji.
     *
     * @return \Vazaha\Mastodon\Results\CustomEmojiResult<array-key,\Vazaha\Mastodon\Models\CustomEmojiModel>
     *
     * @see https://docs.joinmastodon.org/methods/custom_emojis/#get
     */
    public function get(
    ): CustomEmojiResult {
        /** @var \Vazaha\Mastodon\Results\CustomEmojiResult<array-key,\Vazaha\Mastodon\Models\CustomEmojiModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
            ));

        return $models;
    }
}
