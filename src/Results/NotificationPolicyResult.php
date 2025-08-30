<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\NotificationPolicyModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\NotificationPolicyModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\NotificationPolicyResult<array-key, \Vazaha\Mastodon\Models\NotificationPolicyModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\NotificationPolicyResult<array-key, \Vazaha\Mastodon\Models\NotificationPolicyModel> getPreviousPage()
 */
class NotificationPolicyResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return NotificationPolicyModel::class;
    }
}
