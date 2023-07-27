<?php

declare(strict_types=1);

namespace Vazaha\Mastodon;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\UriResolver;
use GuzzleHttp\Psr7\Utils;
use LogicException;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Exceptions\ApiClientException;
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Factories\ResultFactory;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\OAuthTokenModel;
use Vazaha\Mastodon\Requests\AuthorizeRequest;
use Vazaha\Mastodon\Requests\CreateOAuthTokenRequest;
use Vazaha\Mastodon\Results\ErrorResult;

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

    public function setAccessToken(OAuthTokenModel|string $token): self
    {
        if ($token instanceof OAuthTokenModel) {
            $token = $token->access_token;
        }

        $this->accessToken = $token;

        return $this;
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
     */
    public function requestOAuthToken(
        string $clientId,
        string $clientSecret,
        string $redirectUri,
        ?string $code = null,
    ): OAuthTokenModel {
        $request = new CreateOAuthTokenRequest($clientId, $clientSecret, $redirectUri, $code);
        $result = $this->doRequest($request);

        // type hint only needed for phpstan :(
        /** @var null|\Vazaha\Mastodon\Models\OAuthTokenModel $token */
        $token = $result->getModel();

        if ($token === null) {
            throw new LogicException('Token should never be null');
        }

        $this->setAccessToken($token);

        return $token;
    }

    /**
     * @param null|array<int, string|\Vazaha\Mastodon\Enums\Scope>|string $scope
     */
    public function getAuthorizationUrl(
        string $clientId,
        string $redirectUri,
        null|array|string $scope = null,
        ?bool $forceLogin = null,
        ?string $lang = null,
    ): UriInterface {
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
        $resultFactory = new ResultFactory();

        try {
            $response = $this->httpClient->request(
                $request->getHttpMethod()->value,
                $request->getUri(),
                array_merge(
                    $request->getOptions(),
                    $this->getOptions(),
                ),
            );
        } catch (RequestException $e) {
            $response = $e->getResponse();

            if ($response !== null) {
                $result = $resultFactory->build(ErrorResult::class, $this, $request, $response);
                $error = $result->getModel();
            }

            throw new ApiClientException($e->getMessage(), $e->getCode(), $e, $error ?? null);
        }

        /** @phpstan-ignore-next-line */
        return $resultFactory->build($request->getResultClass(), $this, $request, $response);
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

    protected function getAccessToken(): ?string
    {
        return $this->accessToken ?? null;
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
