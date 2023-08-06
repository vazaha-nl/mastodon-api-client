<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use DateTimeInterface;
use Vazaha\Mastodon\Proxies\Proxy;
use Vazaha\Mastodon\Requests\Admin\Measures\GetRequest;
use Vazaha\Mastodon\Results\Admin\MeasureResult;

class MeasuresProxy extends Proxy
{
    /**
     * Get measurable data.
     *
     * @param array<string>     $keys     Request specific measures by their keystring. Supported measures include:
     * @param DateTimeInterface $start_at The start date for the time period. If a time is provided, it will be ignored.
     * @param DateTimeInterface $end_at   The end date for the time period. If a time is provided, it will be ignored.
     *
     * @return \Vazaha\Mastodon\Results\Admin\MeasureResult<array-key,\Vazaha\Mastodon\Models\Admin\MeasureModel>
     */
    public function get(
        array $keys,
        DateTimeInterface $start_at,
        DateTimeInterface $end_at,
    ): MeasureResult {
        /** @var \Vazaha\Mastodon\Results\Admin\MeasureResult<array-key,\Vazaha\Mastodon\Models\Admin\MeasureModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $keys,
                $start_at,
                $end_at,
            ));

        return $models;
    }
}
