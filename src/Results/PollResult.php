<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\PollModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\PollModel> $models
 * @property \Vazaha\Mastodon\Requests\PollRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\PollModel                                                 getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\PollModel>           getModels()
 * @method null|\Vazaha\Mastodon\Results\PollResult<array-key, \Vazaha\Mastodon\Models\PollModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\PollResult<array-key, \Vazaha\Mastodon\Models\PollModel> getPreviousResult()
 */
class PollResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return PollModel::class;
    }
}
