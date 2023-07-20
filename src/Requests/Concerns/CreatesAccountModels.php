<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Models\Contracts\ModelContract;

trait CreatesAccountModels
{
    public function createModel(): ModelContract
    {
        return new Account();
    }
}
