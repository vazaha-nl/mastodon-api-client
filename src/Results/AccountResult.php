<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;

/**
 * @property array<\Vazaha\Mastodon\Models\Account> $models
 *
 * @method null|\Vazaha\Mastodon\Models\Account   getModel()
 * @method array<\Vazaha\Mastodon\Models\Account> getModels()
 */
class AccountResult extends Result implements ResultInterface
{
}
