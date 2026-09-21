<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\WrappedCollectionModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\WrappedCollectionModel>    $models
 *
 * @method null|\Vazaha\Mastodon\Results\WrappedCollectionResult<array-key, \Vazaha\Mastodon\Models\WrappedCollectionModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\WrappedCollectionResult<array-key, \Vazaha\Mastodon\Models\WrappedCollectionModel> getPreviousPage()
 */
class WrappedCollectionResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return WrappedCollectionModel::class;
    }
}
