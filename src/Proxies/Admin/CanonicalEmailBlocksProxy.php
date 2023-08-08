<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel;
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
     * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/#create
     */
    public function create(
        string $email,
        ?string $canonical_email_hash = null,
    ): CanonicalEmailBlockModel {
        $result = $this->apiClient->send(new CreateRequest(
            $email,
            $canonical_email_hash,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Delete a canonical email block.
     *
     * @param string $id the ID of the Admin::CanonicalEmailBlock in the database
     *
     * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/#delete
     */
    public function delete(
        string $id,
    ): CanonicalEmailBlockModel {
        $result = $this->apiClient->send(new DeleteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * List all canonical email blocks.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 blocks. Max 200 blocks.
     *
     * @return \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel>
     *
     * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/#get
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
     * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/#get-one
     */
    public function getOne(
        string $id,
    ): CanonicalEmailBlockModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Test.
     *
     * @param string $email the email to canonicalize and hash
     *
     * @return \Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel>
     *
     * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/#test
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
