<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\MarkerModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\MarkerModel> $models
 * @property \Vazaha\Mastodon\Requests\MarkerRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\MarkerResult<array-key, \Vazaha\Mastodon\Models\MarkerModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\MarkerResult<array-key, \Vazaha\Mastodon\Models\MarkerModel> getPreviousPage()
 */
class MarkerResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return MarkerModel::class;
    }
}
