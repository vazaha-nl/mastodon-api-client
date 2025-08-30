<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\NotificationRequestModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\NotificationRequestModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\NotificationRequestResult<array-key, \Vazaha\Mastodon\Models\NotificationRequestModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\NotificationRequestResult<array-key, \Vazaha\Mastodon\Models\NotificationRequestModel> getPreviousPage()
 */
class NotificationRequestResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return NotificationRequestModel::class;
    }
}
