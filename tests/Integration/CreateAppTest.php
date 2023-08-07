<?php

declare(strict_types=1);

namespace Tests\Integration;

use Vazaha\Mastodon\Models\ApplicationModel;
use Vazaha\Mastodon\Models\TokenModel;

class CreateAppTest extends ApiClientTestCase
{
    public function testCreateAppAndAppToken(): void
    {
        $app = $this->apiClient->methods()->apps()->create(
            'testapp from phpunit',
            'http://example.org/callback',
            'read write',
        );

        self::assertInstanceOf(ApplicationModel::class, $app);
        self::assertIsString($app->client_id);
        self::assertIsString($app->client_secret);

        $token = $this->apiClient->methods()->oauth()->token(
            'client_credentials',
            $app->client_id,
            $app->client_secret,
            'urn:ietf:wg:oauth:2.0:oob',
        );
        self::assertInstanceOf(TokenModel::class, $token);

        $this->apiClient->setAccessToken($token);

        $appVerification = $this->apiClient->methods()->apps()->verifyCredentials();
        self::assertInstanceOf(ApplicationModel::class, $appVerification);
    }
}
