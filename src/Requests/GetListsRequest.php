<?php

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Models\Contracts\ModelContract;
use Vazaha\Mastodon\Models\ListModel;

class GetListsRequest extends Request
{
    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getEndpoint(): string
    {
        return '/api/v1/lists';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return [];
    }

    public function createModel(): ModelContract
    {
        return new ListModel();
    }
}
