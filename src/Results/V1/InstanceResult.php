<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\V1;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\V1\InstanceModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\V1\InstanceModel> $models
 * @property \Vazaha\Mastodon\Requests\V1\InstanceRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\V1\InstanceModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\V1\InstanceModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\V1\InstanceResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\V1\InstanceResult                                     getPreviousResult()
 */
class InstanceResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return InstanceModel::class;
    }
}
