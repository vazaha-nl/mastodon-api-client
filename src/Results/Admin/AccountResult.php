<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\AccountModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\AccountModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\AccountRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\Admin\AccountResult<array-key, \Vazaha\Mastodon\Models\Admin\AccountModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\Admin\AccountResult<array-key, \Vazaha\Mastodon\Models\Admin\AccountModel> getPreviousPage()
 */
class AccountResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return AccountModel::class;
    }
}
