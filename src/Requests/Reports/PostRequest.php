<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Reports;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ReportResult;

/**
 * File a report.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ReportResult>
 *
 * @see https://docs.joinmastodon.org/methods/reports/#post
 */
final class PostRequest extends Request implements RequestInterface
{
    /**
     * @param string            $account_id ID of the account to report
     * @param null|list<string> $status_ids you can attach statuses to the report to provide additional context
     * @param ?string           $comment    The reason for the report. Default maximum of 1000 characters.
     * @param ?bool             $forward    if the account is remote, should the report be forwarded to the remote admin? Defaults to false
     * @param ?string           $category   Specify if the report is due to `spam`, `legal` (illegal content), `violation` of enumerated instance rules, or some `other` reason. Defaults to `other`. Will be set to `violation` if `rule_ids[]` is provided (regardless of any category value you provide).
     * @param null|list<string> $rule_ids   For `violation` category reports, specify the ID of the exact rules broken. Rules and their IDs are available via {@link https://docs.joinmastodon.org/methods/instance#rules GET /api/v1/instance/rules} and {@link https://docs.joinmastodon.org/methods/instance#get GET /api/v1/instance}. See {@link https://docs.joinmastodon.org/api/guidelines/#id Handling and sorting IDs} for more information.
     *
     * @see https://docs.joinmastodon.org/methods/reports/#post
     */
    public function __construct(
        public string $account_id,
        public ?array $status_ids = null,
        public ?string $comment = null,
        public ?bool $forward = null,
        public ?string $category = null,
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

    public function getResultClass(): string
    {
        return ReportResult::class;
    }
}
