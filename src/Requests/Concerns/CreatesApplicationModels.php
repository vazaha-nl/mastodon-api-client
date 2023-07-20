<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\Application;
use Vazaha\Mastodon\Models\Contracts\ModelContract;

trait CreatesApplicationModels
{
    public function createModel(): ModelContract
    {
        return new Application();
    }
}
