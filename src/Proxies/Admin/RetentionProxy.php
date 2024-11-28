<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Requests\Admin\Retention\CreateRequest;
use Vazaha\Mastodon\Results\Admin\CohortResult;

class RetentionProxy extends Proxy
{
    /**
     * Calculate retention data.
     *
     * @param \DateTimeInterface $start_at  The start date for the time period. If a time is provided, it will be ignored.
     * @param \DateTimeInterface $end_at    The end date for the time period. If a time is provided, it will be ignored.
     * @param string             $frequency Specify whether to use `day` or `month` buckets. If any other value is provided, defaults to `day`.
     *
     * @return \Vazaha\Mastodon\Results\Admin\CohortResult<array-key, \Vazaha\Mastodon\Models\Admin\CohortModel>
     *
     * @see https://docs.joinmastodon.org/methods/admin/retention/#create
     */
    public function create(
        \DateTimeInterface $start_at,
        \DateTimeInterface $end_at,
        string $frequency,
    ): CohortResult {
        /** @var \Vazaha\Mastodon\Results\Admin\CohortResult<array-key, \Vazaha\Mastodon\Models\Admin\CohortModel> */
        $models = $this->apiClient
            ->send(new CreateRequest(
                $start_at,
                $end_at,
                $frequency,
            ));

        return $models;
    }
}
