<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\V1;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\V1\InstanceModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\V1\InstanceModel> $models
 * @property \Vazaha\Mastodon\Requests\V1\InstanceRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\V1\InstanceResult<array-key, \Vazaha\Mastodon\Models\V1\InstanceModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\V1\InstanceResult<array-key, \Vazaha\Mastodon\Models\V1\InstanceModel> getPreviousPage()
 */
class InstanceResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return InstanceModel::class;
    }
}
