<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\AnnualReports;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Mark an annual report as read.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/annual_reports/#read
 */
final class ReadRequest extends Request implements RequestInterface
{
    /**
     * @param string $year the year for the annual report
     *
     * @see https://docs.joinmastodon.org/methods/annual_reports/#read
     */
    public function __construct(public string $year)
    {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/annual_reports/%s/read', urlencode($this->year));
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
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
