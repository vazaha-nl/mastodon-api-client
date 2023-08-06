<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Proxies\Proxy;
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
     * @return \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainAllowModel>
     */
    public function create(
        string $domain,
    ): DomainAllowResult {
        /** @var \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainAllowModel> */
        $models = $this->apiClient
            ->send(new CreateRequest(
                $domain,
            ));

        return $models;
    }

    /**
     * Delete an allowed domain.
     *
     * @param string $id the ID of the DomainAllow in the database
     *
     * @return \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainAllowModel>
     */
    public function delete(
        string $id,
    ): DomainAllowResult {
        /** @var \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainAllowModel> */
        $models = $this->apiClient
            ->send(new DeleteRequest(
                $id,
            ));

        return $models;
    }

    /**
     * List all allowed domains.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 100 allows. Max 200 allows.
     *
     * @return \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainAllowModel>
     */
    public function get(
        ?int $limit = null,
    ): DomainAllowResult {
        /** @var \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainAllowModel> */
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
     * @return \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainAllowModel>
     */
    public function getOne(
        string $id,
    ): DomainAllowResult {
        /** @var \Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key,\Vazaha\Mastodon\Models\Admin\DomainAllowModel> */
        $models = $this->apiClient
            ->send(new GetOneRequest(
                $id,
            ));

        return $models;
    }
}
