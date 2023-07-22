<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Models\Contracts\ModelContract;
use Vazaha\Mastodon\Models\ListModel;

class GetListsRequest extends GetRequest
{
    public function getEndpoint(): string
    {
        return '/api/v1/lists';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function createModel(): ModelContract
    {
        return new ListModel();
    }
}
