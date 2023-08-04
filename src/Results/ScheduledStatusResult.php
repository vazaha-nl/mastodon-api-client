<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ScheduledStatusModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ScheduledStatusModel> $models
 * @property \Vazaha\Mastodon\Requests\ScheduledStatusRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\ScheduledStatusModel                                                            getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ScheduledStatusModel>                      getModels()
 * @method null|\Vazaha\Mastodon\Results\ScheduledStatusResult<array-key, \Vazaha\Mastodon\Models\ScheduledStatusModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\ScheduledStatusResult<array-key, \Vazaha\Mastodon\Models\ScheduledStatusModel> getPreviousResult()
 */
class ScheduledStatusResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ScheduledStatusModel::class;
    }
}
