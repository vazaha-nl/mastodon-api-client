<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use GuzzleHttp\Client;
use Vazaha\Mastodon\ApiClient;

class ApiClientFactory
{
    public function build(): ApiClient
    {
        return new ApiClient(
            new Client(),
        );
    }
}
