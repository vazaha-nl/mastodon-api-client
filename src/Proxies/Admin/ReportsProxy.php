<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\Admin\ReportModel;
use Vazaha\Mastodon\Proxies\Proxy;
use Vazaha\Mastodon\Requests\Admin\Reports\AssignToSelfRequest;
use Vazaha\Mastodon\Requests\Admin\Reports\GetOneRequest;
use Vazaha\Mastodon\Requests\Admin\Reports\GetRequest;
use Vazaha\Mastodon\Requests\Admin\Reports\ReopenRequest;
use Vazaha\Mastodon\Requests\Admin\Reports\ResolveRequest;
use Vazaha\Mastodon\Requests\Admin\Reports\UnassignRequest;
use Vazaha\Mastodon\Requests\Admin\Reports\UpdateRequest;
use Vazaha\Mastodon\Results\Admin\ReportResult;

class ReportsProxy extends Proxy
{
    /**
     * Assign report to self.
     *
     * @param string $id the ID of the Report in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/reports/#assign_to_self
     */
    public function assignToSelf(
        string $id,
    ): ReportModel {
        $result = $this->apiClient->send(new AssignToSelfRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\ReportModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View all reports.
     *
     * @param ?bool   $resolved          Filter for resolved reports?
     * @param ?string $account_id        filter for reports filed by this account
     * @param ?string $target_account_id filter for reports targeting this account
     * @param ?int    $limit             Maximum number of results to return. Defaults to 100 reports. Max 200 reports.
     *
     * @return \Vazaha\Mastodon\Results\Admin\ReportResult<array-key,\Vazaha\Mastodon\Models\Admin\ReportModel>
     *
     * @see https://docs.joinmastodon.org/methods/admin/reports/#get
     */
    public function get(
        ?bool $resolved = null,
        ?string $account_id = null,
        ?string $target_account_id = null,
        ?int $limit = null,
    ): ReportResult {
        /** @var \Vazaha\Mastodon\Results\Admin\ReportResult<array-key,\Vazaha\Mastodon\Models\Admin\ReportModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $resolved,
                $account_id,
                $target_account_id,
                $limit,
            ));

        return $models;
    }

    /**
     * View a single report.
     *
     * @param string $id the ID of the Report in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/reports/#get-one
     */
    public function getOne(
        string $id,
    ): ReportModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\ReportModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Reopen a closed report.
     *
     * @param string $id the ID of the Report in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/reports/#reopen
     */
    public function reopen(
        string $id,
    ): ReportModel {
        $result = $this->apiClient->send(new ReopenRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\ReportModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Mark report as resolved.
     *
     * @param string $id the ID of the Report in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/reports/#resolve
     */
    public function resolve(
        string $id,
    ): ReportModel {
        $result = $this->apiClient->send(new ResolveRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\ReportModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unassign report.
     *
     * @param string $id the ID of the Report in the database
     *
     * @see https://docs.joinmastodon.org/methods/admin/reports/#unassign
     */
    public function unassign(
        string $id,
    ): ReportModel {
        $result = $this->apiClient->send(new UnassignRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\ReportModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Update a report.
     *
     * @param string          $id       the ID of the Report in the database
     * @param ?string         $category change the classification of the report to `spam`, `violation`, or `other`
     * @param null|array<int> $rule_ids For `violation` category reports, specify the ID of the exact rules broken. Rules and their IDs are available via [GET /api/v1/instance/rules]({{< relref "methods/instance#rules" >}}) and [GET /api/v1/instance]({{< relref "methods/instance#get" >}}).
     *
     * @see https://docs.joinmastodon.org/methods/admin/reports/#update
     */
    public function update(
        string $id,
        ?string $category = null,
        ?array $rule_ids = null,
    ): ReportModel {
        $result = $this->apiClient->send(new UpdateRequest(
            $id,
            $category,
            $rule_ids,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\ReportModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
