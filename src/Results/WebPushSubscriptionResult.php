<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\WebPushSubscriptionModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\WebPushSubscriptionModel> $models
 * @property \Vazaha\Mastodon\Requests\WebPushSubscriptionRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\WebPushSubscriptionModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\WebPushSubscriptionModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\WebPushSubscriptionResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\WebPushSubscriptionResult                                     getPreviousResult()
 */
class WebPushSubscriptionResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return WebPushSubscriptionModel::class;
    }
}
