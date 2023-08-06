<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\MeasureModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\MeasureModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\MeasureRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\Admin\MeasureModel                                                          getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\MeasureModel>                    getModels()
 * @method null|\Vazaha\Mastodon\Results\Admin\MeasureResult<array-key, \Vazaha\Mastodon\Models\Admin\MeasureModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\Admin\MeasureResult<array-key, \Vazaha\Mastodon\Models\Admin\MeasureModel> getPreviousResult()
 */
class MeasureResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return MeasureModel::class;
    }
}
