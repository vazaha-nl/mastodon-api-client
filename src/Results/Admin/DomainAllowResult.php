<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\DomainAllowModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\DomainAllowRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\Admin\DomainAllowModel                                                              getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel>                        getModels()
 * @method null|\Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel> getPreviousResult()
 */
class DomainAllowResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return DomainAllowModel::class;
    }
}
