<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ScheduledStatusModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ScheduledStatusModel> $models
 * @property \Vazaha\Mastodon\Requests\ScheduledStatusRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\ScheduledStatusResult<array-key, \Vazaha\Mastodon\Models\ScheduledStatusModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\ScheduledStatusResult<array-key, \Vazaha\Mastodon\Models\ScheduledStatusModel> getPreviousPage()
 */
class ScheduledStatusResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ScheduledStatusModel::class;
    }
}
