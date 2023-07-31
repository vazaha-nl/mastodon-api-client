<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\EmptyResultModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyResultModel> $models
 * @property \Vazaha\Mastodon\Requests\EmptyResultRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\EmptyResultModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyResultModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\EmptyResultResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\EmptyResultResult                                     getPreviousResult()
 */
class EmptyResultResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return EmptyResultModel::class;
    }
}
