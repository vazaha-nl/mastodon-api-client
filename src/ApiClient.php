<?php

declare(strict_types=1);

namespace Vazaha\Mastodon;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\UriResolver;
use GuzzleHttp\Psr7\Utils;
use LogicException;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Exceptions\ClientIdNotSetException;
use Vazaha\Mastodon\Exceptions\ClientSecretNotSetException;
use Vazaha\Mastodon\Factories\ResultFactory;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\OAuthToken;
use Vazaha\Mastodon\Requests\AuthorizeRequest;
use Vazaha\Mastodon\Requests\CreateOAuthTokenRequest;

final class ApiClient
{
    protected string $baseUri;

    protected ?string $clientId;

    protected ?string $clientSecret;

    protected string $accessToken;

    public function __construct(
        protected ClientInterface $httpClient,
    ) {
    }

    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @throws \Vazaha\Mastodon\Exceptions\ClientIdNotSetException
     */
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

    /**
     * @throws \Vazaha\Mastodon\Exceptions\ClientSecretNotSetException
     */
    public function getClientSecret(): string
    {
        if (!isset($this->clientSecret)) {
            throw new ClientSecretNotSetException();
        }

        return $this->clientSecret;
    }

    public function setAccessToken(OAuthToken|string $token): self
    {
        if ($token instanceof OAuthToken) {
            $token = $token->access_token;
        }

        $this->accessToken = $token;

        return $this;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken ?? null;
    }

    /**
     * @template T of \Vazaha\Mastodon\Interfaces\ResultInterface
     *
     * @param \Vazaha\Mastodon\Interfaces\RequestInterface<T> $request
     */
    public function getUri(RequestInterface $request): UriInterface
    {
        return UriResolver::resolve(Utils::uriFor($this->getBaseUri()), $request->getUri());
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \LogicException
     * @throws \Vazaha\Mastodon\Exceptions\BaseUriNotSetException
     * @throws \Vazaha\Mastodon\Exceptions\ClientIdNotSetException
     * @throws \Vazaha\Mastodon\Exceptions\ClientSecretNotSetException
     */
    public function requestOAuthToken(
        ?string $clientId,
        ?string $clientSecret,
        string $redirectUri,
        ?string $code = null,
    ): OAuthToken {
        if ($clientId === null) {
            $clientId = $this->getClientId();
        }

        if ($clientSecret === null) {
            $clientSecret = $this->getClientSecret();
        }

        $request = new CreateOAuthTokenRequest($clientId, $clientSecret, $redirectUri, $code);
        $result = $this->doRequest($request);

        // type hint only needed for phpstan :(
        /** @var null|\Vazaha\Mastodon\Models\OAuthToken $token */
        $token = $result->getModel();

        if ($token === null) {
            // should never happen but check is needed
            throw new LogicException('Unexpected failure getting token');
        }

        $this->setAccessToken($token);

        return $token;
    }

    /**
     * @param null|array<int, string|\Vazaha\Mastodon\Enums\Scope>|string $scope
     */
    public function getAuthorizationUrl(
        ?string $clientId,
        string $redirectUri,
        null|array|string $scope = null,
        ?bool $forceLogin = null,
        ?string $lang = null,
    ): UriInterface {
        if ($clientId === null) {
            $clientId = $this->getClientId();
        }

        return $this->getUri(new AuthorizeRequest($clientId, $redirectUri, $scope, $forceLogin, $lang));
    }

    /**
     * @template T of \Vazaha\Mastodon\Interfaces\ResultInterface
     *
     * @param \Vazaha\Mastodon\Interfaces\RequestInterface<T> $request
     *
     * @throws \Vazaha\Mastodon\Exceptions\BaseUriNotSetException
     *
     * @return T
     */
    public function doRequest(RequestInterface $request): ResultInterface
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

        /** @phpstan-ignore-next-line */
        return $responseFactory->build($request->getResultClass(), $this, $request, $response);
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

        if ($this->getAccessToken() !== null) {
            $options['headers'] = [
                'Authorization' => 'Bearer ' . $this->getAccessToken(),
            ];
        }

        return $options;
    }
}
