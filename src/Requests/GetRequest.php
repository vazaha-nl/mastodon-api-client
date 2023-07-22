<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Enums\HttpMethod;

abstract class GetRequest extends Request
{
    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getFormParams(): array
    {
        return [];
    }
}
