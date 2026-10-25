<?php

namespace Tests\Integration;

use Vazaha\Mastodon\Models\InstanceModel;

class InstanceTest extends IntegrationTestCase
{
    public function testGetInstanceGivesValidData(): void
    {
        $this->apiClient->setAccessToken($this->getAdminToken());
        $instance = $this->apiClient->methods()->instance()->v2();

        var_dump($instance->api_versions);

        self::assertInstanceOf(InstanceModel::class, $instance);
    }
}
