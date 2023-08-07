<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ReportModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ReportModel> $models
 * @property \Vazaha\Mastodon\Requests\ReportRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\ReportResult<array-key, \Vazaha\Mastodon\Models\ReportModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\ReportResult<array-key, \Vazaha\Mastodon\Models\ReportModel> getPreviousPage()
 */
class ReportResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ReportModel::class;
    }
}
