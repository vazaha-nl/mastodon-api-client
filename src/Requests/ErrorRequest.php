<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ErrorResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ErrorResult>
 */
abstract class ErrorRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return ErrorResult::class;
    }
}
