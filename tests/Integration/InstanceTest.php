<?php

declare(strict_types=1);

namespace Tests\Integration;

use Vazaha\Mastodon\Models\InstanceModel;

class InstanceTest extends IntegrationTestCase
{
    public function testGetInstanceGivesValidData(): void
    {
        $this->apiClient->setAccessToken($this->getAdminToken());
        $instance = $this->apiClient->methods()->instance()->v2();

        self::assertInstanceOf(InstanceModel::class, $instance);
    }
}
