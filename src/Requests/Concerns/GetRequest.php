<?php

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Enums\HttpMethod;

trait GetRequest
{
    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getFormParams(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array
    {
        return [];
    }

}
