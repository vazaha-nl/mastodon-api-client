<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ErrorModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ErrorModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\ErrorResult<array-key, \Vazaha\Mastodon\Models\ErrorModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\ErrorResult<array-key, \Vazaha\Mastodon\Models\ErrorModel> getPreviousPage()
 */
class ErrorResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ErrorModel::class;
    }
}
