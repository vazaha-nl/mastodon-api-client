<?php

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Models\Contracts\ModelContract;

trait ReturnsAccountModels
{
    public function getModel(): ModelContract
    {
        return new Account();
    }
}
