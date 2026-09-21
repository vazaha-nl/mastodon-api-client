<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\WrappedCollectionItemModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\WrappedCollectionItemModel>    $models
 *
 * @method null|\Vazaha\Mastodon\Results\WrappedCollectionItemResult<array-key, \Vazaha\Mastodon\Models\WrappedCollectionItemModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\WrappedCollectionItemResult<array-key, \Vazaha\Mastodon\Models\WrappedCollectionItemModel> getPreviousPage()
 */
class WrappedCollectionItemResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return WrappedCollectionItemModel::class;
    }
}
