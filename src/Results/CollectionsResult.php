<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\CollectionsModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\CollectionsModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\CollectionsResult<array-key, \Vazaha\Mastodon\Models\CollectionsModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\CollectionsResult<array-key, \Vazaha\Mastodon\Models\CollectionsModel> getPreviousPage()
 */
class CollectionsResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return CollectionsModel::class;
    }
}
