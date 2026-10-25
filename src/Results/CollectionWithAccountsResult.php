<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\CollectionWithAccountsModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\CollectionWithAccountsModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\CollectionWithAccountsResult<array-key, \Vazaha\Mastodon\Models\CollectionWithAccountsModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\CollectionWithAccountsResult<array-key, \Vazaha\Mastodon\Models\CollectionWithAccountsModel> getPreviousPage()
 */
class CollectionWithAccountsResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return CollectionWithAccountsModel::class;
    }
}
