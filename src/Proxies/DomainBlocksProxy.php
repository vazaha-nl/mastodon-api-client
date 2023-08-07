<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Requests\DomainBlocks\BlockRequest;
use Vazaha\Mastodon\Requests\DomainBlocks\GetRequest;
use Vazaha\Mastodon\Requests\DomainBlocks\UnblockRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class DomainBlocksProxy extends Proxy
{
    /**
     * Block a domain.
     *
     * @param string $domain domain to block
     */
    public function block(
        string $domain,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new BlockRequest(
            $domain,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get domain blocks.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 domain blocks. Max 200 domain blocks.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function get(
        ?int $limit = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }

    /**
     * Unblock a domain.
     *
     * @param string $domain domain to unblock
     */
    public function unblock(
        string $domain,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new UnblockRequest(
            $domain,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
