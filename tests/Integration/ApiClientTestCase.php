<?php

namespace Tests\Integration;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Factories\ApiClientFactory;

class ApiClientTestCase extends TestCase
{
    protected ApiClient $apiClient;

    public function setUp(): void
    {
        parent::setUp();

        $this->apiClient = (new ApiClientFactory())
            ->build()
            ->setBaseUri('http://mastodon.local');
    }
}
