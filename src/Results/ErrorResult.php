<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ErrorModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ErrorModel> $models
 * @property \Vazaha\Mastodon\Requests\ErrorRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\ErrorModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ErrorModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\ErrorResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\ErrorResult                                     getPreviousResult()
 */
class ErrorResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ErrorModel::class;
    }
}
