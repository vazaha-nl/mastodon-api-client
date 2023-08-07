<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\ReportModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\ReportModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\ReportRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\Admin\ReportResult<array-key, \Vazaha\Mastodon\Models\Admin\ReportModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\Admin\ReportResult<array-key, \Vazaha\Mastodon\Models\Admin\ReportModel> getPreviousPage()
 */
class ReportResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ReportModel::class;
    }
}
