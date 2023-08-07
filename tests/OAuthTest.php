<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\TokenModel;
use Vazaha\Mastodon\Requests\Oauth\TokenRequest;
use Vazaha\Mastodon\Results\TokenResult;

class OAuthTest extends TestCase
{
    use CreatesMockClient;

    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();

        $response = $this->createJsonResponseFromFile(200, 'token.json');
        $this->apiClient = $this->createMockClient([$response]);
    }

    public function testCreateOAuthToken(): void
    {
        $response = $this->apiClient
            ->setBaseUri('https://example.org')
            ->send(new TokenRequest('client_credentials', 'code', 'clientid', 'clientsecret', 'redirecturi'));
        self::assertInstanceOf(TokenResult::class, $response);
        $model = $response->first();
        self::assertInstanceOf(TokenModel::class, $model);
        self::assertEquals('test_token', $model->access_token);
    }

    public function testCreateOAuthTokenUsingProxy(): void
    {
        $model = $this->apiClient
            ->setBaseUri('https://example.org')
            ->methods()
            ->oauth()
            ->token('client_credentials', 'code', 'clientid', 'clientsecret', 'redirecturi');
        self::assertInstanceOf(TokenModel::class, $model);
        self::assertEquals('test_token', $model->access_token);
    }
}
