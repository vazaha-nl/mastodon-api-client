<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\AccountModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\AccountModel> $models
 * @property \Vazaha\Mastodon\Requests\AccountRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\AccountResult<array-key, \Vazaha\Mastodon\Models\AccountModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\AccountResult<array-key, \Vazaha\Mastodon\Models\AccountModel> getPreviousPage()
 */
class AccountResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return AccountModel::class;
    }
}
