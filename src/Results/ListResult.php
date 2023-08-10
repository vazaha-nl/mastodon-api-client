<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ListModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ListModel> $models
 * @property \Vazaha\Mastodon\Requests\ListRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\ListResult<array-key, \Vazaha\Mastodon\Models\ListModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\ListResult<array-key, \Vazaha\Mastodon\Models\ListModel> getPreviousPage()
 */
class ListResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ListModel::class;
    }
}
