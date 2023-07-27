<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\EmptyResponseModel;
use Vazaha\Mastodon\Results\Result;

trait HasEmptyResponse
{
    public function getModelClass(): string
    {
        return EmptyResponseModel::class;
    }

    public function getResultClass(): string
    {
        return Result::class;
    }
}
