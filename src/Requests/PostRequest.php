<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Enums\HttpMethod;

abstract class PostRequest extends Request
{
    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
