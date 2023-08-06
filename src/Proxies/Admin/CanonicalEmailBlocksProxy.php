<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Proxies\Proxy;
use Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks\CreateRequest;
use Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks\DeleteRequest;
use Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks\GetOneRequest;
use Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks\GetRequest;
use Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks\TestRequest;
use Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult;

class CanonicalEmailBlocksProxy extends Proxy
{
    /**
     * Block a canonical email.
     *
     * @param string  $email                The email to canonicalize, hash, and block. If this parameter is provided, `canonical_email_hash` will be ignored.
     * @param ?string $canonical_email_hash The hash to test against. If `email` is not provided, this parameter is required.
     *
     * @return \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel>
     */
    public function create(
        string $email,
        ?string $canonical_email_hash = null,
    ): CanonicalEmailBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel> */
        $models = $this->apiClient
            ->send(new CreateRequest(
                $email,
                $canonical_email_hash,
            ));

        return $models;
    }

    /**
     * Delete a canonical email block.
     *
     * @param string $id the ID of the Admin::CanonicalEmailBlock in the database
     *
     * @return \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel>
     */
    public function delete(
        string $id,
    ): CanonicalEmailBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel> */
        $models = $this->apiClient
            ->send(new DeleteRequest(
                $id,
            ));

        return $models;
    }

    /**
     * List all canonical email blocks.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 blocks. Max 200 blocks.
     *
     * @return \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel>
     */
    public function get(
        ?int $limit = null,
    ): CanonicalEmailBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }

    /**
     * Show a single canonical email block.
     *
     * @param string $id the ID of the Admin::CanonicalEmailBlock in the database
     *
     * @return \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel>
     */
    public function getOne(
        string $id,
    ): CanonicalEmailBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel> */
        $models = $this->apiClient
            ->send(new GetOneRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Test.
     *
     * @param string $email the email to canonicalize and hash
     *
     * @return \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel>
     */
    public function test(
        string $email,
    ): CanonicalEmailBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel> */
        $models = $this->apiClient
            ->send(new TestRequest(
                $email,
            ));

        return $models;
    }
}
