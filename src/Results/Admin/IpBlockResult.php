<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\IpBlockModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\IpBlockModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\IpBlockRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\Admin\IpBlockModel                                                          getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\IpBlockModel>                    getModels()
 * @method null|\Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\IpBlockModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\IpBlockModel> getPreviousResult()
 */
class IpBlockResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return IpBlockModel::class;
    }
}
