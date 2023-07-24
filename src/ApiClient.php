<?php

declare(strict_types=1);

namespace Vazaha\Mastodon;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\UriResolver;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Exceptions\ClientIdNotSetException;
use Vazaha\Mastodon\Exceptions\ClientSecretNotSetException;
use Vazaha\Mastodon\Factories\ResultFactory;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\PagedResultInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;

final class ApiClient
{
    protected string $baseUri;

    protected ?string $clientId;

    protected ?string $clientSecret;

    protected string $token;

    public function __construct(
        protected ClientInterface $httpClient,
    ) {
    }

    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getClientId(): string
    {
        if (!isset($this->clientId)) {
            throw new ClientIdNotSetException();
        }

        return $this->clientId;
    }

    public function setClientSecret(string $clientSecret): self
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    public function getClientSecret(): string
    {
        if (!isset($this->clientSecret)) {
            throw new ClientSecretNotSetException();
        }

        return $this->clientSecret;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token ?? null;
    }

    public function getUri(RequestInterface $request): UriInterface
    {
        return UriResolver::resolve(Utils::uriFor($this->getBaseUri()), $request->getUri());
    }

    public function doRequest(RequestInterface $request): PagedResultInterface|ResultInterface
    {
        $response = $this->httpClient->request(
            $request->getHttpMethod()->value,
            $request->getUri(),
            array_merge(
                $request->getOptions(),
                $this->getOptions(),
            ),
        );

        $responseFactory = new ResultFactory();

        return $responseFactory->build($this, $request, $response);
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

    /**
     * @return array<string, mixed>
     */
    protected function getOptions(): array
    {
        $options = [
            'base_uri' => $this->getBaseUri(),
        ];

        if ($this->getToken() !== null) {
            $options['headers'] = [
                'Authorization' => 'Bearer ' . $this->getToken(),
            ];
        }

        return $options;
    }
}
