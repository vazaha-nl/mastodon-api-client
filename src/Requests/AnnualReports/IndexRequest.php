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
 * Get all annual reports.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WrappedAnnualReportsResult>
 *
 * @see https://docs.joinmastodon.org/methods/annual_reports/#index
 */
final class IndexRequest extends Request implements RequestInterface
{
    /**
     * @see https://docs.joinmastodon.org/methods/annual_reports/#index
     */
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/annual_reports';
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
