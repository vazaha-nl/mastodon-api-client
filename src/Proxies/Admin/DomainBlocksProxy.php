<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\Admin\DomainBlockModel;
use Vazaha\Mastodon\Requests\Admin\DomainBlocks\CreateRequest;
use Vazaha\Mastodon\Requests\Admin\DomainBlocks\DeleteRequest;
use Vazaha\Mastodon\Requests\Admin\DomainBlocks\GetOneRequest;
use Vazaha\Mastodon\Requests\Admin\DomainBlocks\GetRequest;
use Vazaha\Mastodon\Requests\Admin\DomainBlocks\UpdateRequest;
use Vazaha\Mastodon\Results\Admin\DomainBlockResult;

class DomainBlocksProxy extends Proxy
{
    /**
     * Block a domain from federating.
     *
     * @param string  $domain          the domain to block federation with
     * @param ?string $severity        Whether to apply a `silence`, `suspend`, or `noop` to the domain. Defaults to `silence`
     * @param ?bool   $reject_media    Whether media attachments should be rejected. Defaults to false
     * @param ?bool   $reject_reports  Whether reports from this domain should be rejected. Defaults to false
     * @param ?string $private_comment a private note about this domain block, visible only to admins
     * @param ?string $public_comment  a public note about this domain block, optionally shown on the about page
     * @param ?bool   $obfuscate       Whether to partially censor the domain when shown in public. Defaults to false
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_blocks/#create
     */
    public function create(
        string $domain,
        ?string $severity = null,
        ?bool $reject_media = null,
        ?bool $reject_reports = null,
        ?string $private_comment = null,
        ?string $public_comment = null,
        ?bool $obfuscate = null,
    ): DomainBlockModel {
        $result = $this->apiClient->send(new CreateRequest(
            $domain,
            $severity,
            $reject_media,
            $reject_reports,
            $private_comment,
            $public_comment,
            $obfuscate,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\DomainBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Remove a domain block.
     *
     * @param string $id the ID of the DomainAllow in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_blocks/#delete
     */
    public function delete(
        string $id,
    ): DomainBlockModel {
        $result = $this->apiClient->send(new DeleteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\DomainBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * List all blocked domains.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 blocks. Max 200 blocks.
     *
     * @return \Vazaha\Mastodon\Results\Admin\DomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainBlockModel>
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_blocks/#get
     */
    public function get(
        ?int $limit = null,
    ): DomainBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\DomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainBlockModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }

    /**
     * Get a single blocked domain.
     *
     * @param string $id the ID of the DomainBlock in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_blocks/#get-one
     */
    public function getOne(
        string $id,
    ): DomainBlockModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\DomainBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Update a domain block.
     *
     * @param string  $id              the ID of the DomainAllow in the database
     * @param ?string $severity        Whether to apply a `silence`, `suspend`, or `noop` to the domain. Defaults to `silence`
     * @param ?bool   $reject_media    Whether media attachments should be rejected. Defaults to false
     * @param ?bool   $reject_reports  Whether reports from this domain should be rejected. Defaults to false
     * @param ?string $private_comment a private note about this domain block, visible only to admins
     * @param ?string $public_comment  a public note about this domain block, optionally shown on the about page
     * @param ?bool   $obfuscate       Whether to partially censor the domain when shown in public. Defaults to false
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_blocks/#update
     */
    public function update(
        string $id,
        ?string $severity = null,
        ?bool $reject_media = null,
        ?bool $reject_reports = null,
        ?string $private_comment = null,
        ?string $public_comment = null,
        ?bool $obfuscate = null,
    ): DomainBlockModel {
        $result = $this->apiClient->send(new UpdateRequest(
            $id,
            $severity,
            $reject_media,
            $reject_reports,
            $private_comment,
            $public_comment,
            $obfuscate,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\DomainBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
