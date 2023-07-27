<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ErrorModel;

/**
 * @property array<\Vazaha\Mastodon\Models\ErrorModel>    $models
 * @property array<\Vazaha\Mastodon\Request\ErrorRequest> $request
 *
 * @method null|\Vazaha\Mastodon\Models\ErrorModel   getModel()
 * @method array<\Vazaha\Mastodon\Models\ErrorModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\ErrorResult getNextResult()
 * @method null|\Vazaha\Mastodon\Results\ErrorResult getPreviousResult()
 */
class ErrorResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ErrorModel::class;
    }
}
