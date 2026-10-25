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
 * Generate a new annual report.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/annual_reports/#generate
 */
final class GenerateRequest extends Request implements RequestInterface
{
    /**
     * @param string $year the year for the annual report
     *
     * @see https://docs.joinmastodon.org/methods/annual_reports/#generate
     */
    public function __construct(public string $year)
    {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/annual_reports/%s/generate', urlencode($this->year));
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
