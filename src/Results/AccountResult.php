<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;

/**
 * @property array<\Vazaha\Mastodon\Models\Account>         $models
 * @property array<\Vazaha\Mastodon\Request\AccountRequest> $request
 *
 * @method null|\Vazaha\Mastodon\Models\Account        getModel()
 * @method array<\Vazaha\Mastodon\Models\Account>      getModels()
 * @method null|\Vazaha\Mastodon\Results\AccountResult getNextResult()
 * @method null|\Vazaha\Mastodon\Results\AccountResult getPreviousResult()
 */
class AccountResult extends Result implements ResultInterface
{
}
