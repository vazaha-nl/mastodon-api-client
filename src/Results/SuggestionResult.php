<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\SuggestionModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\SuggestionModel> $models
 * @property \Vazaha\Mastodon\Requests\SuggestionRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\SuggestionResult<array-key, \Vazaha\Mastodon\Models\SuggestionModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\SuggestionResult<array-key, \Vazaha\Mastodon\Models\SuggestionModel> getPreviousPage()
 */
class SuggestionResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return SuggestionModel::class;
    }
}
