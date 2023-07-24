<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\ModelInterface;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Models\ListModel;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
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

    public function createModel(): ModelInterface
    {
        return new ListModel();
    }
}
