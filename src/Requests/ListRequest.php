<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ListResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ListResult>
 */
abstract class ListRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return ListResult::class;
    }
}
