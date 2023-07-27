<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;
use Vazaha\Mastodon\Results\ListResult;

/**
 * @see https://docs.joinmastodon.org/methods/lists/#get
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ListResult>
 */
final class GetListsRequest extends Request implements RequestInterface
{
    use GetRequest;

    public function getEndpoint(): string
    {
        return '/api/v1/lists';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getResultClass(): string
    {
        return ListResult::class;
    }
}
