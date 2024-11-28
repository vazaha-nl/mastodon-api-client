<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel;
use Vazaha\Mastodon\Requests\Admin\EmailDomainBlocks\CreateRequest;
use Vazaha\Mastodon\Requests\Admin\EmailDomainBlocks\DeleteRequest;
use Vazaha\Mastodon\Requests\Admin\EmailDomainBlocks\GetOneRequest;
use Vazaha\Mastodon\Requests\Admin\EmailDomainBlocks\GetRequest;
use Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult;

class EmailDomainBlocksProxy extends Proxy
{
    /**
     * Block an email domain from signups.
     *
     * @param string $domain the domain to block federation with
     *
     * @see https://docs.joinmastodon.org/methods/admin/email_domain_blocks/#create
     */
    public function create(
        string $domain,
    ): EmailDomainBlockModel {
        $result = $this->apiClient->send(new CreateRequest(
            $domain,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Delete an email domain block.
     *
     * @param string $id the ID of the DomainAllow in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/email_domain_blocks/#delete
     */
    public function delete(
        string $id,
    ): EmailDomainBlockModel {
        $result = $this->apiClient->send(new DeleteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * List all blocked email domains.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 blocks. Max 200 blocks.
     *
     * @return \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel>
     *
     * @see https://docs.joinmastodon.org/methods/admin/email_domain_blocks/#get
     */
    public function get(
        ?int $limit = null,
    ): EmailDomainBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }

    /**
     * Get a single blocked email domain.
     *
     * @param string $id the ID of the DomainBlock in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/email_domain_blocks/#get-one
     */
    public function getOne(
        string $id,
    ): EmailDomainBlockModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
