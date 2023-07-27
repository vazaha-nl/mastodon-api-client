<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UriInterface;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\OAuthTokenModel;
use Vazaha\Mastodon\Requests\CreateOAuthTokenRequest;
use Vazaha\Mastodon\Results\OAuthTokenResult;

class OAuthTest extends TestCase
{
    use CreatesMockClient;

    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();

        $response = $this->createJsonResponseFromFile('token.json');
        $this->apiClient = $this->createMockClient([$response]);
    }

    public function testCreateOAuthToken(): void
    {
        $response = $this->apiClient
            ->setBaseUri('https://example.org')
            ->doRequest(new CreateOAuthTokenRequest('clientid', 'clientsecret', 'redirecturi'));
        self::assertInstanceOf(OAuthTokenResult::class, $response);
        $model = $response->getModel();
        self::assertInstanceOf(OAuthTokenModel::class, $model);
        self::assertEquals('test_token', $model->access_token);
    }

    public function testRequestOAuthTokenMethod(): void
    {
        $token = $this->apiClient
            ->setBaseUri('https://example.org')
            ->requestOAuthToken(
                'clientid',
                'clientsecret',
                'https://redirecturi.example.org',
                'code',
            );

        self::assertInstanceOf(OAuthTokenModel::class, $token);
    }

    public function testGetAuthUri(): void
    {
        $uri = $this->apiClient
            ->setBaseUri('https://example.org')
            ->getAuthorizationUrl(
                'clienturl',
                'https://redirecturi',
                'read',
            );

        self::assertInstanceOf(UriInterface::class, $uri);
        self::assertStringContainsString('https://example.org', (string) $uri);
    }
}
