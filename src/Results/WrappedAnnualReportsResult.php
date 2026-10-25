<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\WrappedAnnualReportsModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\WrappedAnnualReportsModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\WrappedAnnualReportsResult<array-key, \Vazaha\Mastodon\Models\WrappedAnnualReportsModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\WrappedAnnualReportsResult<array-key, \Vazaha\Mastodon\Models\WrappedAnnualReportsModel> getPreviousPage()
 */
class WrappedAnnualReportsResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return WrappedAnnualReportsModel::class;
    }
}
