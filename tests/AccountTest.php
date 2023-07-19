<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Account;

class AccountTest extends TestCase
{
	public function testAccountCanBeInstantiatedWithOnlyId()
	{
		$account = new Account('testid');
		$this->assertInstanceOf(Account::class, $account);
		$this->assertEquals('testid', $account->id);
	}

	public function testAccountCorrectlyFilledFromApiResponse()
	{
		$json = file_get_contents(__DIR__ . '/assets/account.json');

		$account = Account::fromNative(json_decode($json, true));

		$this->assertEquals('23634', $account->id);
		$this->assertEquals(404, $account->following_count);
	}
}