<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\AccountModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\AccountModel> $models
 * @property \Vazaha\Mastodon\Request\AccountRequest                                         $request
 *
 * @method null|\Vazaha\Mastodon\Models\AccountModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\AccountModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\AccountResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\AccountResult                                     getPreviousResult()
 */
class AccountResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return AccountModel::class;
    }
}
