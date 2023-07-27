<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Results\AccountResult;

trait RequestsAccounts
{
    public function getModelClass(): string
    {
        return AccountModel::class;
    }

    public function getResultClass(): string
    {
        return AccountResult::class;
    }
}
