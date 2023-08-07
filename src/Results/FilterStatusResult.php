<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\FilterStatusModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\FilterStatusModel> $models
 * @property \Vazaha\Mastodon\Requests\FilterStatusRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\FilterStatusResult<array-key, \Vazaha\Mastodon\Models\FilterStatusModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\FilterStatusResult<array-key, \Vazaha\Mastodon\Models\FilterStatusModel> getPreviousPage()
 */
class FilterStatusResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FilterStatusModel::class;
    }
}
