<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ContextModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ContextModel> $models
 * @property \Vazaha\Mastodon\Requests\ContextRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\ContextResult<array-key, \Vazaha\Mastodon\Models\ContextModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\ContextResult<array-key, \Vazaha\Mastodon\Models\ContextModel> getPreviousPage()
 */
class ContextResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ContextModel::class;
    }
}
