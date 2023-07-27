<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;

/**
 * @property array<\Vazaha\Mastodon\Models\AccountModel>         $models
 * @property array<\Vazaha\Mastodon\Request\AccountRequest> $request
 *
 * @method null|\Vazaha\Mastodon\Models\AccountModel        getModel()
 * @method array<\Vazaha\Mastodon\Models\AccountModel>      getModels()
 * @method null|\Vazaha\Mastodon\Results\AccountResult getNextResult()
 * @method null|\Vazaha\Mastodon\Results\AccountResult getPreviousResult()
 */
class AccountResult extends Result implements ResultInterface
{
}
