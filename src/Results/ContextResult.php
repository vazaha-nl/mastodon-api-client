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
 * @method null|\Vazaha\Mastodon\Models\ContextModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ContextModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\ContextResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\ContextResult                                     getPreviousResult()
 */
class ContextResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ContextModel::class;
    }
}
