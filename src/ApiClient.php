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
     * @return string
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
     * @return string
     * @throws \Vazaha\Mastodon\Exceptions\ClientSecretNotSetException
     */
    public function getClientSecret(): string
    {
        if (!isset($this->clientSecret)) {
            throw new ClientSecretNotSetException();
        }

        return $this->clientSecret;
    }

    public function setAccessToken(string|OAuthToken $token): self
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
     * @param null|string $clientId
     * @param null|string $clientSecret
     * @param string $redirectUri
     * @param null|string $code
     * @return \Vazaha\Mastodon\Models\OAuthToken
     * @throws \Vazaha\Mastodon\Exceptions\ClientIdNotSetException
     * @throws \Vazaha\Mastodon\Exceptions\ClientSecretNotSetException
     * @throws \Vazaha\Mastodon\Exceptions\BaseUriNotSetException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \LogicException
     */
    public function requestOAuthToken(
        ?string $clientId = null,
        ?string $clientSecret = null,
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
        /** @var \Vazaha\Mastodon\Models\OAuthToken|null $token */
        $token = $result->getModel();

        if ($token === null) {
            // should never happen but check is needed
            throw new LogicException('token should not be null!');
        }

        $this->setAccessToken($token);

        return $token;
    }

    /**
     * @param array<int, string|\Vazaha\Mastodon\Enums\Scope>|string|null $scope
     */
    public function getAuthorizationUrl(
        ?string $clientId = null,
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
     * @return T
     * @throws \Vazaha\Mastodon\Exceptions\BaseUriNotSetException
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
