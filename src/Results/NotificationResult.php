<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\NotificationModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\NotificationModel> $models
 * @property \Vazaha\Mastodon\Requests\NotificationRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\NotificationResult<array-key, \Vazaha\Mastodon\Models\NotificationModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\NotificationResult<array-key, \Vazaha\Mastodon\Models\NotificationModel> getPreviousPage()
 */
class NotificationResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return NotificationModel::class;
    }
}
