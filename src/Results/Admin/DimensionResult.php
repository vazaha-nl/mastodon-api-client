<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\DimensionModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\DimensionModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\DimensionRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\Admin\DimensionModel                                                            getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\DimensionModel>                      getModels()
 * @method null|\Vazaha\Mastodon\Results\Admin\DimensionResult<array-key, \Vazaha\Mastodon\Models\Admin\DimensionModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\Admin\DimensionResult<array-key, \Vazaha\Mastodon\Models\Admin\DimensionModel> getPreviousResult()
 */
class DimensionResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return DimensionModel::class;
    }
}
