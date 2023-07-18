<?php

namespace Vazaha\Mastodon;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\ClientInterface;
use Vazaha\Mastodon\Exceptions\DomainNotSetException;
use Vazaha\Mastodon\Requests\Request;
use Vazaha\Mastodon\Responses\Response;

class ApiClient
{
    public const API_VERSION = 'v1';

	protected string $domain;

	protected string $clientId;

	protected string $clientSecret;

	public function __construct(
		protected ClientInterface $httpClient
	) {
		//
	}

	public function domain(string $domain): self
	{
		$this->domain = $domain;

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

	// public function createApp(): App
	// {
	// 	if (empty($this->domain)) {
	// 		throw new Exception('baseUri not set');
	// 	}

	// 	// TODO application name, redirect uri, frontend!

	// 	$result = $this->request('POST', '/api/v1/apps');

	// 	// print_r($result);

	// 	return new App();
	// }

	public static function make(): self
	{
		return new static(new GuzzleHttpClient());
	}

    public function doRequest(Request $request): Response
    {
        $response = $this->httpClient->request(
            $request->getMethod(),
            $request->getUri(),
            array_merge($request->getOptions(), [
                'base_uri' => $this->getBaseUri(),
            ]),
        );

        $responseClass = $request->getResponseClass();

        return new $responseClass($this, $request, $response);
    }

    protected function getBaseUri(): string
    {
        if (!isset($this->domain)) {
            throw new DomainNotSetException();
        }

        return sprintf('https://%s/api/%s/', $this->domain, self::API_VERSION);
    }
}
