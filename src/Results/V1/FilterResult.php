<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\V1;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\V1\FilterModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\V1\FilterModel> $models
 * @property \Vazaha\Mastodon\Requests\V1\FilterRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\V1\FilterModel                                                      getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\V1\FilterModel>                getModels()
 * @method null|\Vazaha\Mastodon\Results\V1\FilterResult<array-key, \Vazaha\Mastodon\Models\V1\FilterModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\V1\FilterResult<array-key, \Vazaha\Mastodon\Models\V1\FilterModel> getPreviousResult()
 */
class FilterResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FilterModel::class;
    }
}
