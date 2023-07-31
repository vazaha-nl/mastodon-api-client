<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\MarkerModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\MarkerModel> $models
 * @property \Vazaha\Mastodon\Requests\MarkerRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\MarkerModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\MarkerModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\MarkerResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\MarkerResult                                     getPreviousResult()
 */
class MarkerResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return MarkerModel::class;
    }
}
