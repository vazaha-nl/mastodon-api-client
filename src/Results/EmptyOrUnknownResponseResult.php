<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\EmptyOrUnknownResponseModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownResponseModel> $models
 * @property \Vazaha\Mastodon\Requests\EmptyOrUnknownResponseRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\EmptyOrUnknownResponseModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownResponseModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\EmptyOrUnknownResponseResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\EmptyOrUnknownResponseResult                                     getPreviousResult()
 */
class EmptyOrUnknownResponseResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return EmptyOrUnknownResponseModel::class;
    }
}
