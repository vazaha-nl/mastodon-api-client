<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\ApiClient;

class ClientTest extends TestCase
{
	public function testClientCanBeInstantiated()
	{
		$client = ApiClient::make();
		$this->assertInstanceOf(ApiClient::class, $client);
	}
}