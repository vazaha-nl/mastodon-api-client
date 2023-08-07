<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\FilterModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\FilterModel> $models
 * @property \Vazaha\Mastodon\Requests\FilterRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\FilterResult<array-key, \Vazaha\Mastodon\Models\FilterModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\FilterResult<array-key, \Vazaha\Mastodon\Models\FilterModel> getPreviousPage()
 */
class FilterResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FilterModel::class;
    }
}
