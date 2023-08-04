<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\TagModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\TagModel> $models
 * @property \Vazaha\Mastodon\Requests\TagRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\TagModel                                                getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\TagModel>          getModels()
 * @method null|\Vazaha\Mastodon\Results\TagResult<array-key, \Vazaha\Mastodon\Models\TagModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\TagResult<array-key, \Vazaha\Mastodon\Models\TagModel> getPreviousResult()
 */
class TagResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return TagModel::class;
    }
}
