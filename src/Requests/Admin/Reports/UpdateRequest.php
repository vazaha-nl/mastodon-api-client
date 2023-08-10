<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Reports;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\Admin\ReportResult;

/**
 * Update a report.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\ReportResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/reports/#update
 */
final class UpdateRequest extends Request implements RequestInterface
{
    /**
     * @param string          $id       the ID of the Report in the database
     * @param ?string         $category change the classification of the report to `spam`, `violation`, or `other`
     * @param null|array<int> $rule_ids For `violation` category reports, specify the ID of the exact rules broken. Rules and their IDs are available via [GET /api/v1/instance/rules]({{< relref "methods/instance#rules" >}}) and [GET /api/v1/instance]({{< relref "methods/instance#get" >}}).
     */
    public function __construct(
        public string $id,
        public ?string $category = null,
        public ?array $rule_ids = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/admin/reports/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'category' => $this->category,
            'rule_ids' => $this->rule_ids,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }

    public function getResultClass(): string
    {
        return ReportResult::class;
    }
}
