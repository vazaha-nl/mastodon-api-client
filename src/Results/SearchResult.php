<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\SearchModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\SearchModel> $models
 * @property \Vazaha\Mastodon\Requests\SearchRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\SearchResult<array-key, \Vazaha\Mastodon\Models\SearchModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\SearchResult<array-key, \Vazaha\Mastodon\Models\SearchModel> getPreviousPage()
 */
class SearchResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return SearchModel::class;
    }
}
