<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\Admin\DomainAllowModel;
use Vazaha\Mastodon\Requests\Admin\DomainAllows\CreateRequest;
use Vazaha\Mastodon\Requests\Admin\DomainAllows\DeleteRequest;
use Vazaha\Mastodon\Requests\Admin\DomainAllows\GetOneRequest;
use Vazaha\Mastodon\Requests\Admin\DomainAllows\GetRequest;
use Vazaha\Mastodon\Results\Admin\DomainAllowResult;

class DomainAllowsProxy extends Proxy
{
    /**
     * Allow a domain to federate.
     *
     * @param string $domain the domain to allow federation with
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_allows/#create
     */
    public function create(
        string $domain,
    ): DomainAllowModel {
        $result = $this->apiClient->send(new CreateRequest(
            $domain,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\DomainAllowModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Delete an allowed domain.
     *
     * @param string $id the ID of the DomainAllow in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_allows/#delete
     */
    public function delete(
        string $id,
    ): DomainAllowModel {
        $result = $this->apiClient->send(new DeleteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\DomainAllowModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * List all allowed domains.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 allows. Max 200 allows.
     *
     * @return \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel>
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_allows/#get
     */
    public function get(
        ?int $limit = null,
    ): DomainAllowResult {
        /** @var \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }

    /**
     * Get a single allowed domain.
     *
     * @param string $id the ID of the DomainAllow in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/domain_allows/#get-one
     */
    public function getOne(
        string $id,
    ): DomainAllowModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\DomainAllowModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
