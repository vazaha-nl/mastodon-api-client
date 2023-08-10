<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> $models
 * @property \Vazaha\Mastodon\Requests\EmptyOrUnknownRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> getPreviousPage()
 */
class EmptyOrUnknownResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return EmptyOrUnknownModel::class;
    }
}
