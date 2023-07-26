<?php

declare(strict_types=1);

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use LogicException;
use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\OAuthToken;
use Vazaha\Mastodon\Requests\CreateOAuthTokenRequest;
use Vazaha\Mastodon\Results\OAuthTokenResult;

class OAuthTest extends TestCase
{
    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();

        // TODO REFACTOR

        $json = file_get_contents(__DIR__ . '/assets/token.json');

        if (!$json) {
            throw new LogicException('Could not read json!');
        }

        $mock = new MockHandler([
            new Response(
                200,
                [
                    'Content-type' => 'application/json',
                ],
                $json,
            ),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $httpClient = new Client(['handler' => $handlerStack]);

        $this->apiClient = new ApiClient($httpClient);
    }

    public function testCreateOAuthToken(): void
    {
        $response = $this->apiClient
            ->setBaseUri('https://example.org')
            ->doRequest(new CreateOAuthTokenRequest('clientid', 'clientsecret', 'redirecturi'));
        self::assertInstanceOf(OAuthTokenResult::class, $response);
        $model = $response->getModel();
        self::assertInstanceOf(OAuthToken::class, $model);
        self::assertEquals('test_token', $model->access_token);
    }
}
