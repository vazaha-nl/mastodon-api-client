<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\EmptyResponseModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyResponseModel> $models
 * @property \Vazaha\Mastodon\Requests\EmptyResponseRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\EmptyResponseModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyResponseModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\EmptyResponseResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\EmptyResponseResult                                     getPreviousResult()
 */
class EmptyResponseResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return EmptyResponseModel::class;
    }
}
