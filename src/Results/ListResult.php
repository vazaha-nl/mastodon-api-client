<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ListModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ListModel> $models
 * @property \Vazaha\Mastodon\Requests\ListRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\ListModel                                                 getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ListModel>           getModels()
 * @method null|\Vazaha\Mastodon\Results\ListResult<array-key, \Vazaha\Mastodon\Models\ListModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\ListResult<array-key, \Vazaha\Mastodon\Models\ListModel> getPreviousResult()
 */
class ListResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ListModel::class;
    }
}
