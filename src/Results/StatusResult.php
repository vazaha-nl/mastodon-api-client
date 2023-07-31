<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\StatusModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\StatusModel> $models
 * @property \Vazaha\Mastodon\Requests\StatusRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\StatusModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\StatusModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\StatusResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\StatusResult                                     getPreviousResult()
 */
class StatusResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return StatusModel::class;
    }
}
