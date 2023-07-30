<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ApplicationResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ApplicationResult>
 */
abstract class ApplicationRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return ApplicationResult::class;
    }
}
