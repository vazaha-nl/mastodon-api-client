<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\DomainAllowModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\DomainAllowRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\Admin\DomainAllowResult<array-key, \Vazaha\Mastodon\Models\Admin\DomainAllowModel> getPreviousPage()
 */
class DomainAllowResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return DomainAllowModel::class;
    }
}
