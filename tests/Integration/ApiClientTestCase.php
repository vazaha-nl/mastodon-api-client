<?php

declare(strict_types=1);

namespace Tests\Integration;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Factories\ApiClientFactory;

abstract class ApiClientTestCase extends TestCase
{
    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->apiClient = (new ApiClientFactory())
            ->build()
            ->setBaseUri('http://mastodon.local');
    }
}
