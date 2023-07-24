<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\ListModel;
use Vazaha\Mastodon\Results\ListResult;

trait RequestsLists
{
    public function getModelClass(): string
    {
        return ListModel::class;
    }

    public function getResultClass(): string
    {
        return ListResult::class;
    }
}
