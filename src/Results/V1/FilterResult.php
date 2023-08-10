<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\V1;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\V1\FilterModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\V1\FilterModel> $models
 * @property \Vazaha\Mastodon\Requests\V1\FilterRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\V1\FilterResult<array-key, \Vazaha\Mastodon\Models\V1\FilterModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\V1\FilterResult<array-key, \Vazaha\Mastodon\Models\V1\FilterModel> getPreviousPage()
 */
class FilterResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FilterModel::class;
    }
}
