<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\Application;
use Vazaha\Mastodon\Interfaces\ModelInterface;

trait CreatesApplicationModels
{
    public function createModel(): ModelInterface
    {
        return new Application();
    }
}
