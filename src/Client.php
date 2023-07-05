<?php

namespace Vazaha\Mastodon;

use GuzzleHttp\Client as GuzzleHttpClient;
use Psr\Http\Client\ClientInterface;
use Vazaha\Mastodon\Types\Account;

class Client
{
	public function __construct(
		protected ClientInterface $client
	) {
		//
	}

	public static function make(): self
	{
		return new static(new GuzzleHttpClient());
	}

	public function getAccount(string $id): Account
	{
		// TODO

		return new Account();
	}
}