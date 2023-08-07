<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\InstanceModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\InstanceModel> $models
 * @property \Vazaha\Mastodon\Requests\InstanceRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\InstanceResult<array-key, \Vazaha\Mastodon\Models\InstanceModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\InstanceResult<array-key, \Vazaha\Mastodon\Models\InstanceModel> getPreviousPage()
 */
class InstanceResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return InstanceModel::class;
    }
}
