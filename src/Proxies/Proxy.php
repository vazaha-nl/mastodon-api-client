<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\ApiClient;

class Proxy
{
    public function __construct(
        public ApiClient $apiClient,
    ) {
    }
}
