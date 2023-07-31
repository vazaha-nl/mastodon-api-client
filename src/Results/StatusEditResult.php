<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\StatusEditModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\StatusEditModel> $models
 * @property \Vazaha\Mastodon\Requests\StatusEditRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\StatusEditModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\StatusEditModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\StatusEditResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\StatusEditResult                                     getPreviousResult()
 */
class StatusEditResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return StatusEditModel::class;
    }
}
