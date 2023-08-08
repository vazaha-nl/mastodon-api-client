<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Reports;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * File a report.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ReportResult>
 *
 * @see https://docs.joinmastodon.org/methods/reports/#post
 */
final class PostRequest extends \Vazaha\Mastodon\Requests\ReportRequest implements RequestInterface
{
    public function __construct(
        /**
         * ID of the account to report.
         */
        public string $account_id,

        /**
         * You can attach statuses to the report to provide additional context.
         *
         * @var null|array<string> $status_ids
         */
        public ?array $status_ids = null,

        /**
         * The reason for the report. Default maximum of 1000 characters.
         */
        public ?string $comment = null,

        /**
         * If the account is remote, should the report be forwarded to the remote
         * admin? Defaults to false.
         */
        public ?bool $forward = null,

        /**
         * Specify if the report is due to `spam`, `violation` of enumerated instance
         * rules, or some `other` reason. Defaults to `other`. Will be set to
         * `violation` if `rule_ids[]` is provided (regardless of any category value
         * you provide).
         */
        public ?string $category = null,

        /**
         * For `violation` category reports, specify the ID of the exact rules broken.
         * Rules and their IDs are available via [GET /api/v1/instance/rules]({{&lt;
         * relref &quot;methods/instance#rules&quot; &gt;}}) and [GET /api/v1/instance]({{&lt; relref
         * &quot;methods/instance#get&quot; &gt;}}).
         *
         * @var null|array<int> $rule_ids
         */
        public ?array $rule_ids = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/reports';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'account_id' => $this->account_id,
            'status_ids' => $this->status_ids,
            'comment' => $this->comment,
            'forward' => $this->forward,
            'category' => $this->category,
            'rule_ids' => $this->rule_ids,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
