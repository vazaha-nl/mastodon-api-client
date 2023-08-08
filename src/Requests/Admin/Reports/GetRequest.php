<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Reports;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View all reports.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\ReportResult>
 *
 * @see https://docs.joinmastodon.org/methods/reports/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\Admin\ReportRequest implements RequestInterface
{
    public function __construct(
        /**
         * Filter for resolved reports?
         */
        public ?bool $resolved = null,

        /**
         * Filter for reports filed by this account.
         */
        public ?string $account_id = null,

        /**
         * Filter for reports targeting this account.
         */
        public ?string $target_account_id = null,

        /**
         * Maximum number of results to return. Defaults to 100 reports. Max 200
         * reports.
         */
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
}
