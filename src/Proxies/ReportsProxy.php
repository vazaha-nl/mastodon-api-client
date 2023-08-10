<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\ReportModel;
use Vazaha\Mastodon\Requests\Reports\PostRequest;

class ReportsProxy extends Proxy
{
    /**
     * File a report.
     *
     * @param string             $account_id ID of the account to report
     * @param null|array<string> $status_ids you can attach statuses to the report to provide additional context
     * @param ?string            $comment    The reason for the report. Default maximum of 1000 characters.
     * @param ?bool              $forward    if the account is remote, should the report be forwarded to the remote admin? Defaults to false
     * @param ?string            $category   Specify if the report is due to `spam`, `violation` of enumerated instance rules, or some `other` reason. Defaults to `other`. Will be set to `violation` if `rule_ids[]` is provided (regardless of any category value you provide).
     * @param null|array<int>    $rule_ids   For `violation` category reports, specify the ID of the exact rules broken. Rules and their IDs are available via [GET /api/v1/instance/rules]({{< relref "methods/instance#rules" >}}) and [GET /api/v1/instance]({{< relref "methods/instance#get" >}}).
     *
     * @see https://docs.joinmastodon.org/methods/reports/#post
     */
    public function post(
        string $account_id,
        ?array $status_ids = null,
        ?string $comment = null,
        ?bool $forward = null,
        ?string $category = null,
        ?array $rule_ids = null,
    ): ReportModel {
        $result = $this->apiClient->send(new PostRequest(
            $account_id,
            $status_ids,
            $comment,
            $forward,
            $category,
            $rule_ids,
        ));

        /** @var null|\Vazaha\Mastodon\Models\ReportModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
