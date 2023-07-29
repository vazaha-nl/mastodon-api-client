<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;

/**
 * @see https://link.to.docs
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 */
final class GetFavouritedStatusesRequest extends StatusRequest implements RequestInterface
{
    use GetRequest;

    public function getEndpoint(): string
    {
        return '/api/v1/favourites';
    }

    public function getQueryParams(): array
    {
        return [];
    }
}
