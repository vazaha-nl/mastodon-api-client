<?php

declare(strict_types=1);

namespace Tests\Integration;

class UserInfoTest extends IntegrationTestCase
{
    public function testOauthUserinfoWorks(): void
    {
        $this->apiClient->setAccessToken($this->getAdminToken());
        $response = $this->apiClient->methods()->oauth()->userinfo();
        $userinfo = $response->getDecodedBody();
        self::assertTrue($response->isNotEmpty());
        self::assertNotNull($userinfo);
        self::assertArrayHasKey('preferred_username', $userinfo);
        self::assertEquals('admin', $userinfo['preferred_username']);
    }
}
