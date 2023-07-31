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
 * @method null|\Vazaha\Mastodon\Models\FilterStatusModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\FilterStatusModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\FilterStatusResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\FilterStatusResult                                     getPreviousResult()
 */
class FilterStatusResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FilterStatusModel::class;
    }
}
