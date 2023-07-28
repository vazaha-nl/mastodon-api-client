<?php

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;

/**
 * @see https://docs.joinmastodon.org/methods/preferences/#get
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\PreferencesResult>
 */
class GetPreferencesRequest extends PreferencesRequest implements RequestInterface
{
    use GetRequest;

    public function getEndpoint(): string
    {
        return '/api/v1/preferences';
    }

    public function getQueryParams(): array
    {
        return [];
    }
}
