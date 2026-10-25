<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\WrappedErrorModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\WrappedErrorModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\WrappedErrorResult<array-key, \Vazaha\Mastodon\Models\WrappedErrorModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\WrappedErrorResult<array-key, \Vazaha\Mastodon\Models\WrappedErrorModel> getPreviousPage()
 */
class WrappedErrorResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return WrappedErrorModel::class;
    }
}
