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
 * @method null|\Vazaha\Mastodon\Models\SearchModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\SearchModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\SearchResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\SearchResult                                     getPreviousResult()
 */
class SearchResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return SearchModel::class;
    }
}
