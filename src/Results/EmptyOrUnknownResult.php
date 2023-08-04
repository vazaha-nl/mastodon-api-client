<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> $models
 * @property \Vazaha\Mastodon\Requests\EmptyOrUnknownRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel                                                           getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>                     getModels()
 * @method null|\Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> getPreviousResult()
 */
class EmptyOrUnknownResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return EmptyOrUnknownModel::class;
    }
}
