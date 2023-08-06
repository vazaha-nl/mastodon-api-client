<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\ApiClient;

abstract class Proxy
{
    public function __construct(
        protected ApiClient $apiClient,
    ) {
    }
}
