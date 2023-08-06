<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Proxies\Proxy;
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
     * @return \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel>
     */
    public function create(
        string $domain,
    ): EmailDomainBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel> */
        $models = $this->apiClient
            ->send(new CreateRequest(
                $domain,
            ));

        return $models;
    }

    /**
     * Delete an email domain block.
     *
     * @param string $id the ID of the DomainAllow in the database
     *
     * @return \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel>
     */
    public function delete(
        string $id,
    ): EmailDomainBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel> */
        $models = $this->apiClient
            ->send(new DeleteRequest(
                $id,
            ));

        return $models;
    }

    /**
     * List all blocked email domains.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 blocks. Max 200 blocks.
     *
     * @return \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel>
     */
    public function get(
        ?int $limit = null,
    ): EmailDomainBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel> */
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
     * @return \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel>
     */
    public function getOne(
        string $id,
    ): EmailDomainBlockResult {
        /** @var \Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key,\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel> */
        $models = $this->apiClient
            ->send(new GetOneRequest(
                $id,
            ));

        return $models;
    }
}
