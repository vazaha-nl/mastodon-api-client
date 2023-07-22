<?php

declare(strict_types=1);

namespace Vazaha\Mastodon;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\UriResolver;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Exceptions\ClientIdNotSet;
use Vazaha\Mastodon\Exceptions\ClientIdNotSetException;
use Vazaha\Mastodon\Exceptions\ClientSecretNotSetException;
use Vazaha\Mastodon\Factories\ResponseFactory;
use Vazaha\Mastodon\Models\OAuthToken;
use Vazaha\Mastodon\Requests\AuthorizeRequest;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;
use Vazaha\Mastodon\Responses\Contracts\PagedResponseContract;
use Vazaha\Mastodon\Responses\Contracts\ResponseContract;

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

    public function getUri(RequestContract $request): UriInterface
    {
        return UriResolver::resolve(Utils::uriFor($this->getBaseUri()), $request->getUri());
    }

    public function doRequest(RequestContract $request): PagedResponseContract|ResponseContract
    {
        $response = $this->httpClient->request(
            $request->getHttpMethod()->value,
            $request->getUri(),
            array_merge($request->getOptions(), [
                'base_uri' => $this->getBaseUri(),
            ]),
        );

        $responseFactory = new ResponseFactory();

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
}
