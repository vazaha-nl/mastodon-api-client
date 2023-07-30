<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\OAuthTokenResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\OAuthTokenResult>
 */
abstract class OAuthTokenRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return OAuthTokenResult::class;
    }
}
