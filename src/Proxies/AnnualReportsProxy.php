<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\WrappedAnnualReportsModel;
use Vazaha\Mastodon\Requests\AnnualReports\GenerateRequest;
use Vazaha\Mastodon\Requests\AnnualReports\GetRequest;
use Vazaha\Mastodon\Requests\AnnualReports\GetStateRequest;
use Vazaha\Mastodon\Requests\AnnualReports\IndexRequest;
use Vazaha\Mastodon\Requests\AnnualReports\ReadRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class AnnualReportsProxy extends Proxy
{
    /**
     * Generate a new annual report.
     *
     * @param string $year the year for the annual report
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/annual_reports/#generate
     */
    public function generate(string $year): EmptyOrUnknownResult
    {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new GenerateRequest($year));

        return $models;
    }

    /**
     * Get a single annual report.
     *
     * @param string $year the year for the annual report
     *
     * @see https://docs.joinmastodon.org/methods/annual_reports/#get
     */
    public function get(string $year): WrappedAnnualReportsModel
    {
        $result = $this->apiClient->send(new GetRequest($year));

        /** @var null|\Vazaha\Mastodon\Models\WrappedAnnualReportsModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get the state of an annual report.
     *
     * @param string $year the year for the annual report
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/annual_reports/#get-state
     */
    public function getState(string $year): EmptyOrUnknownResult
    {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new GetStateRequest($year));

        return $models;
    }

    /**
     * Get all annual reports.
     *
     * @see https://docs.joinmastodon.org/methods/annual_reports/#index
     */
    public function index(
    ): WrappedAnnualReportsModel {
        $result = $this->apiClient->send(new IndexRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\WrappedAnnualReportsModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Mark an annual report as read.
     *
     * @param string $year the year for the annual report
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/annual_reports/#read
     */
    public function read(string $year): EmptyOrUnknownResult
    {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new ReadRequest($year));

        return $models;
    }
}
