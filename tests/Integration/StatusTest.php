<?php

declare(strict_types=1);

namespace Tests\Integration;

class StatusTest extends IntegrationTestCase
{
    public function testAdminCanPostStatuses(): void
    {
        $token = $this->getAdminToken();
        $this->apiClient->setAccessToken($token);
        $status = $this->apiClient->methods()->statuses()->create('hello world');
        self::assertStringContainsString('hello world', $status->content);
    }
}
