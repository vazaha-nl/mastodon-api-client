<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use DateTimeInterface;
use Vazaha\Mastodon\Proxies\Proxy;
use Vazaha\Mastodon\Requests\Admin\Dimensions\GetRequest;
use Vazaha\Mastodon\Results\Admin\DimensionResult;

class DimensionsProxy extends Proxy
{
    /**
     * Get dimensional data.
     *
     * @param array<string>      $keys     Request specific dimensions by their keystring. Supported dimensions include:
     * @param ?DateTimeInterface $start_at The start date for the time period. If a time is provided, it will be ignored.
     * @param ?DateTimeInterface $end_at   The end date for the time period. If a time is provided, it will be ignored.
     * @param ?int               $limit    the maximum number of results to return for sources, servers, languages, tag or instance dimensions
     *
     * @return \Vazaha\Mastodon\Results\Admin\DimensionResult<array-key,\Vazaha\Mastodon\Models\Admin\DimensionModel>
     */
    public function get(
        array $keys,
        ?DateTimeInterface $start_at = null,
        ?DateTimeInterface $end_at = null,
        ?int $limit = null,
    ): DimensionResult {
        /** @var \Vazaha\Mastodon\Results\Admin\DimensionResult<array-key,\Vazaha\Mastodon\Models\Admin\DimensionModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $keys,
                $start_at,
                $end_at,
                $limit,
            ));

        return $models;
    }
}
