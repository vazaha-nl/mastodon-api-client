<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\CohortModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\CohortModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\CohortRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\Admin\CohortResult<array-key, \Vazaha\Mastodon\Models\Admin\CohortModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\Admin\CohortResult<array-key, \Vazaha\Mastodon\Models\Admin\CohortModel> getPreviousPage()
 */
class CohortResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return CohortModel::class;
    }
}
