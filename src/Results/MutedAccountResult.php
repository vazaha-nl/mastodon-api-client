<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\MutedAccountModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\MutedAccountModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\MutedAccountResult<array-key, \Vazaha\Mastodon\Models\MutedAccountModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\MutedAccountResult<array-key, \Vazaha\Mastodon\Models\MutedAccountModel> getPreviousPage()
 */
class MutedAccountResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return MutedAccountModel::class;
    }
}
