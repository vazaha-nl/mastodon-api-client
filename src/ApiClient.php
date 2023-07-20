<?php

declare(strict_types=1);

namespace Vazaha\Mastodon;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\ClientInterface;
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Factories\ResponseFactory;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;
use Vazaha\Mastodon\Responses\Contracts\PagedResponseContract;
use Vazaha\Mastodon\Responses\Contracts\ResponseContract;

final class ApiClient
{
    protected string $baseUri;
    protected string $clientId;
    protected string $clientSecret;

    public function __construct(
        protected ClientInterface $httpClient,
    ) {
    }

    public function setBaseUri(string $baseUri): self
    {
        $this->baseUri = $baseUri;

        return $this;
    }

    public function getBaseUri(): string
    {
        if (!isset($this->baseUri)) {
            throw new BaseUriNotSetException();
        }

        return $this->baseUri;
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

    public static function make(): self
    {
        return new self(new GuzzleHttpClient());
    }

    public function doRequest(RequestContract $request): PagedResponseContract|ResponseContract
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
}
