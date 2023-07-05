<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Client;

class ClientTest extends TestCase
{
	public function testClientCanBeInstantiated()
	{
		$client = Client::make();
		$this->assertInstanceOf(Client::class, $client);
	}
}