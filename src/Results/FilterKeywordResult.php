<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\FilterKeywordModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\FilterKeywordModel> $models
 * @property \Vazaha\Mastodon\Requests\FilterKeywordRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\FilterKeywordResult<array-key, \Vazaha\Mastodon\Models\FilterKeywordModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\FilterKeywordResult<array-key, \Vazaha\Mastodon\Models\FilterKeywordModel> getPreviousPage()
 */
class FilterKeywordResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FilterKeywordModel::class;
    }
}
