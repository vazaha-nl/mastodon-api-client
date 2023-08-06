<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

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
     * @return \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel>
     */
    public function create(
        string $severity,
        ?string $ip = null,
        ?string $comment = null,
        ?int $expires_in = null,
    ): IpBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel> */
        $models = $this->apiClient
            ->send(new CreateRequest(
                $severity,
                $ip,
                $comment,
                $expires_in,
            ));

        return $models;
    }

    /**
     * Delete an IP block.
     *
     * @param string $id the ID of the DomainAllow in the database
     *
     * @return \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel>
     */
    public function delete(
        string $id,
    ): IpBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel> */
        $models = $this->apiClient
            ->send(new DeleteRequest(
                $id,
            ));

        return $models;
    }

    /**
     * List all IP blocks.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 blocks. Max 200 blocks.
     *
     * @return \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel>
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
     * @return \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel>
     */
    public function getOne(
        string $id,
    ): IpBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel> */
        $models = $this->apiClient
            ->send(new GetOneRequest(
                $id,
            ));

        return $models;
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
     * @return \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel>
     */
    public function update(
        string $id,
        ?string $ip = null,
        ?string $severity = null,
        ?string $comment = null,
        ?int $expires_in = null,
    ): IpBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\IpBlockModel> */
        $models = $this->apiClient
            ->send(new UpdateRequest(
                $id,
                $ip,
                $severity,
                $comment,
                $expires_in,
            ));

        return $models;
    }
}
