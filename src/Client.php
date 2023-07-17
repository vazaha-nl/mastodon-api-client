<?php

namespace Vazaha\Mastodon;

use Exception;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Collection;
use Vazaha\Mastodon\ValueObjects\Account;
use Vazaha\Mastodon\ValueObjects\App;

class Client
{
	protected string $baseUri;

	protected string $clientId;

	protected string $clientSecret;

	public function __construct(
		protected ClientInterface $httpClient
	) {
		//
	}

	public function baseUri(string $baseUri): self
	{
		$this->baseUri = $baseUri;

		return $this;
	}

	public function clientId(string $clientId): self
	{
		$this->clientId = $clientId;

		return $this;
	}

	public function clientSecret(string $clientSecret): self
	{
		$this->clientSecret = $clientSecret;

		return $this;
	}

	public function getAccount(string $id): Account
	{
		$result = $this->request(
			'GET',
			sprintf('/api/v1/accounts/%s', urlencode($id))
		);

		// var_dump($result);

		return Account::fromNative($result);
	}

    public function lookupAccount(string $username): Account
    {
        $result = $this->request(
            'GET',
            sprintf('/api/v1/accounts/lookup?acct=%s', urlencode($username))
        );

        // var_dump($result);

        return Account::fromNative($result);

    }

    /**
     * @param \Vazaha\Mastodon\ValueObjects\Account $account
     * @return array|\Vazaha\Mastodon\ValueObjects\Account[]
     */
    public function getFollowedAccounts(Account $account): array
    {
        $result = $this->request(
            'GET',
            sprintf('/api/v1/accounts/%s/following', $account->id)
        );

        // TODO parse
        return $result;
    }

	public function createApp(): App
	{
		if (empty($this->baseUri)) {
			throw new Exception('baseUri not set');
		}

		// TODO application name, redirect uri, frontend!

		$result = $this->request('POST', '/api/v1/apps');

		// print_r($result);

		return new App();
	}

	public static function make(): self
	{
		return new static(new GuzzleHttpClient());
	}

	/**
	 * @param string $method
	 * @param string $uri
	 * @param array $options
	 * @return mixed
	 * @throws \Exception
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \RuntimeException
	 */
	protected function request(string $method, string $uri, array $options = [])
	{
		if (empty($this->baseUri)) {
			throw new Exception('baseUri not set');
		}

		$response = $this->httpClient->request(
			$method,
			$uri,
			array_merge($options, [
				'base_uri' => $this->baseUri,
			])
		);

		return json_decode($response->getBody()->getContents(), true);
	}

}
