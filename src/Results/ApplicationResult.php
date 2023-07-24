<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;

/**
 * @property array<\Vazaha\Mastodon\Models\Application> $models
 *
 * @method null|\Vazaha\Mastodon\Models\Application   getModel()
 * @method array<\Vazaha\Mastodon\Models\Application> getModels()
 */
class ApplicationResult extends Result implements ResultInterface
{
}
