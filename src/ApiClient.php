<?php

namespace Vazaha\Mastodon;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\ClientInterface;
use Vazaha\Mastodon\Exceptions\DomainNotSetException;
use Vazaha\Mastodon\Requests\Request;
use Vazaha\Mastodon\Responses\Response;
use Vazaha\Mastodon\Responses\ResponseFactory;

final class ApiClient
{
	protected string $domain;

	protected string $clientId;

	protected string $clientSecret;

	public function __construct(
		protected ClientInterface $httpClient
	) {
		//
	}

	public function setDomain(string $domain): self
	{
		$this->domain = $domain;

		return $this;
	}

	public function getDomain(): string
	{
        if (!isset($this->domain)) {
            throw new DomainNotSetException();
        }

        return $this->domain;
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

        $responseFactory = new ResponseFactory();
        return $responseFactory->create($this, $request, $response);
    }

    protected function getBaseUri(): string
    {
		return sprintf('https://%s', $this->getDomain());
    }
}
