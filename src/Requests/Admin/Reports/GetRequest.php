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
 * View all reports.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\ReportResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/reports/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param ?bool   $resolved          Filter for resolved reports?
     * @param ?string $account_id        filter for reports filed by this account
     * @param ?string $target_account_id filter for reports targeting this account
     * @param ?int    $limit             Maximum number of results to return. Defaults to 100 reports. Max 200 reports.
     */
    public function __construct(
        public ?bool $resolved = null,
        public ?string $account_id = null,
        public ?string $target_account_id = null,
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/reports';
    }

    public function getQueryParams(): array
    {
        return [
            'resolved' => $this->resolved,
            'account_id' => $this->account_id,
            'target_account_id' => $this->target_account_id,
            'limit' => $this->limit,
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return ReportResult::class;
    }
}
