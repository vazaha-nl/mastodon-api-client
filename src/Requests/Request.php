<?php

namespace Vazaha\Mastodon\Requests;

use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\HasPaging;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
abstract class Request implements RequestInterface
{
    use HasPaging;

    public function getUri(): UriInterface
    {
        return Uri::withQueryValues(
            new Uri(
                $this->getEndpoint(),
            ),
            $this->getQueryParams(),
        );
    }
}
