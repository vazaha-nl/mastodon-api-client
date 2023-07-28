<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\AccountResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
abstract class AccountRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return AccountResult::class;
    }
}
