<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Reports;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Update a report.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\ReportResult>
 *
 * @see https://docs.joinmastodon.org/methods/reports/#update
 */
final class UpdateRequest extends \Vazaha\Mastodon\Requests\Admin\ReportRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Report in the database.
         */
        public string $id,

        /**
         * Change the classification of the report to `spam`, `violation`, or `other`.
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
}
