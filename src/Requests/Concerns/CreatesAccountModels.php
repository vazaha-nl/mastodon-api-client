<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Interfaces\ModelInterface;

trait CreatesAccountModels
{
    public function createModel(): ModelInterface
    {
        return new Account();
    }
}
