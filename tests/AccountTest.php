<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Account;

class AccountTest extends TestCase
{
	public function testAccountCorrectlyFilledFromApiResponse()
	{
		$json = file_get_contents(__DIR__ . '/assets/account.json');

		$account = Account::fromArray(json_decode($json, true));

		$this->assertEquals('23634', $account->id);
		$this->assertEquals(404, $account->following_count);
	}

	public function testEncapsulatedApiClientHasCorrectDomain()
	{
		$account = new Account();
		$account->setSourceDomain('example.org');
		$apiClient = $account->getApiClient();
		$this->assertEquals('example.org', $apiClient->getDomain());
	}
}