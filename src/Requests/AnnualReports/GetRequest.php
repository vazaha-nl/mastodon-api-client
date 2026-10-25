<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\AnnualReports;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\WrappedAnnualReportsResult;

/**
 * Get a single annual report.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WrappedAnnualReportsResult>
 *
 * @see https://docs.joinmastodon.org/methods/annual_reports/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param string $year the year for the annual report
     *
     * @see https://docs.joinmastodon.org/methods/annual_reports/#get
     */
    public function __construct(public string $year)
    {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/annual_reports/%s', urlencode($this->year));
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return [];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return WrappedAnnualReportsResult::class;
    }
}
