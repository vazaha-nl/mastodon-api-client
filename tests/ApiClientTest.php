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
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Requests\GetAccountRequest;
use Vazaha\Mastodon\Responses\Response as ApiResponse;

class ApiClientTest extends TestCase
{
    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();

        $json = file_get_contents(__DIR__ . '/assets/account.json');

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

    public function testClientCanBeInstantiatedUsingFactory(): void
    {
        $client = ApiClient::make();
        self::assertInstanceOf(ApiClient::class, $client);
    }

    public function testThrowsDomainNotSetExceptionWithoutDomain(): void
    {
        $this->expectException(BaseUriNotSetException::class);
        $this->apiClient->doRequest(new GetAccountRequest('testid'));
    }

    public function testGetAccount(): void
    {
        $response = $this->apiClient
            ->setBaseUri('https://example.org')
            ->doRequest(new GetAccountRequest('testid'));
        self::assertInstanceOf(ApiResponse::class, $response);

        /** @var \Vazaha\Mastodon\Models\Account $account */
        $account = $response->getModel();
        self::assertInstanceOf(Account::class, $account);
        self::assertEquals('23634', $account->id);
    }
}
