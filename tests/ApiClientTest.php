<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use LogicException;
use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\DomainNotSetException;
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
		    		'Content-type' => 'application/json'
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
		$this->assertInstanceOf(ApiClient::class, $client);
	}

	public function testThrowsDomainNotSetExceptionWithoutDomain(): void
	{
		$this->expectException(DomainNotSetException::class);
		$this->apiClient->doRequest(new GetAccountRequest('testid'));
	}

	public function testGetAccount(): void
	{
		$response = $this->apiClient
			->setDomain('example.org')
			->doRequest(new GetAccountRequest('testid'));
		$this->assertInstanceOf(ApiResponse::class, $response);

		/** @var \Vazaha\Mastodon\Models\Account $account **/
		$account = $response->getModel();
		$this->assertInstanceOf(Account::class, $account);
		$this->assertEquals('23634', $account->id);
	}
}