<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\StatusSourceModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\StatusSourceModel> $models
 * @property \Vazaha\Mastodon\Requests\StatusSourceRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\StatusSourceModel                                                         getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\StatusSourceModel>                   getModels()
 * @method null|\Vazaha\Mastodon\Results\StatusSourceResult<array-key, \Vazaha\Mastodon\Models\StatusSourceModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\StatusSourceResult<array-key, \Vazaha\Mastodon\Models\StatusSourceModel> getPreviousResult()
 */
class StatusSourceResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return StatusSourceModel::class;
    }
}
