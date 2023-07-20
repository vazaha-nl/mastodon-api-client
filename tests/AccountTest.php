<?php

namespace Tests;

use LogicException;
use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Account;

class AccountTest extends TestCase
{
	public function testAccountCorrectlyFilledFromApiResponse(): void
	{
		$json = file_get_contents(__DIR__ . '/assets/account.json');

		if (!$json) {
			throw new LogicException('Could not read json!');
		}

		$decoded = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

		$this->assertIsArray($decoded);

		$account = (new Account())->fillFromArray($decoded);

		$this->assertEquals('23634', $account->id);
		$this->assertEquals(404, $account->following_count);
	}

	public function testEncapsulatedApiClientHasCorrectDomain(): void
	{
		$account = new Account();
		$account->setBaseUri('https://example.org');
		$apiClient = $account->getApiClient();
		$this->assertEquals('https://example.org', $apiClient->getBaseUri());
	}
}