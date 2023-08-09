<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\Admin\IpBlockModel;
use Vazaha\Mastodon\Proxies\Proxy;
use Vazaha\Mastodon\Requests\Admin\IpBlocks\CreateRequest;
use Vazaha\Mastodon\Requests\Admin\IpBlocks\DeleteRequest;
use Vazaha\Mastodon\Requests\Admin\IpBlocks\GetOneRequest;
use Vazaha\Mastodon\Requests\Admin\IpBlocks\GetRequest;
use Vazaha\Mastodon\Requests\Admin\IpBlocks\UpdateRequest;
use Vazaha\Mastodon\Results\Admin\IpBlockResult;

class IpBlocksProxy extends Proxy
{
    /**
     * Block an IP address range from signing up.
     *
     * @param string  $severity   The policy to apply to this IP range: `sign_up_requires_approval`, `sign_up_block`, or `no_access`
     * @param ?string $ip         The IP address and prefix to block. Defaults to `0.0.0.0/32`
     * @param ?string $comment    the reason for this IP block
     * @param ?int    $expires_in the number of seconds in which this IP block will expire
     *
     * @see https://docs.joinmastodon.org/methods/admin/ip_blocks/#create
     */
    public function create(
        string $severity,
        ?string $ip = null,
        ?string $comment = null,
        ?int $expires_in = null,
    ): IpBlockModel {
        $result = $this->apiClient->send(new CreateRequest(
            $severity,
            $ip,
            $comment,
            $expires_in,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\IpBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Delete an IP block.
     *
     * @param string $id the ID of the DomainAllow in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/ip_blocks/#delete
     */
    public function delete(
        string $id,
    ): IpBlockModel {
        $result = $this->apiClient->send(new DeleteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\IpBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * List all IP blocks.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 blocks. Max 200 blocks.
     *
     * @return \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel>
     *
     * @see https://docs.joinmastodon.org/methods/admin/ip_blocks/#get
     */
    public function get(
        ?int $limit = null,
    ): IpBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }

    /**
     * Get a single IP block.
     *
     * @param string $id the ID of the IpBlock in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/ip_blocks/#get-one
     */
    public function getOne(
        string $id,
    ): IpBlockModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\IpBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Update a domain block.
     *
     * @param string  $id         the ID of the IpBlock in the database
     * @param ?string $ip         The IP address and prefix to block. Defaults to `0.0.0.0/32`
     * @param ?string $severity   The policy to apply to this IP range: `sign_up_requires_approval`, `sign_up_block`, or `no_access`
     * @param ?string $comment    the reason for this IP block
     * @param ?int    $expires_in the number of seconds in which this IP block will expire
     *
     * @see https://docs.joinmastodon.org/methods/admin/ip_blocks/#update
     */
    public function update(
        string $id,
        ?string $ip = null,
        ?string $severity = null,
        ?string $comment = null,
        ?int $expires_in = null,
    ): IpBlockModel {
        $result = $this->apiClient->send(new UpdateRequest(
            $id,
            $ip,
            $severity,
            $comment,
            $expires_in,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\IpBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
