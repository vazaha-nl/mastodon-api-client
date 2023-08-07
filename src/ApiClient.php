<?php

declare(strict_types=1);

namespace Vazaha\Mastodon;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\UriResolver;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Factories\ExceptionFactory;
use Vazaha\Mastodon\Factories\ResultFactory;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\TokenModel;
use Vazaha\Mastodon\Proxies\MethodsProxy;
use Vazaha\Mastodon\Requests\Oauth\AuthorizeRequest;

final class ApiClient
{
    protected MethodsProxy $methods;

    protected string $baseUri;

    protected ?string $clientId;

    protected ?string $clientSecret;

    protected string $accessToken;

    public function __construct(
        protected ClientInterface $httpClient,
    ) {
    }

    public function methods(): MethodsProxy
    {
        if (!isset($this->methods)) {
            $this->methods = new MethodsProxy($this);
        }

        return $this->methods;
    }

    /**
     * Get url to authorize a user.
     *
     * @param string  $response_type should be set equal to `code`
     * @param string  $client_id     the client ID, obtained during app registration
     * @param string  $redirect_uri  Set a URI to redirect the user to. If this parameter is set to `urn:ietf:wg:oauth:2.0:oob` then the authorization code will be shown instead. Must match one of the `redirect_uris` declared during app registration.
     * @param ?string $scope         List of requested OAuth scopes, separated by spaces (or by pluses, if using query parameters). Must be a subset of `scopes` declared during app registration. If not provided, defaults to `read`.
     * @param ?bool   $force_login   forces the user to re-login, which is necessary for authorizing with multiple accounts from the same instance
     * @param ?string $lang          the ISO 639-1 two-letter language code to use while rendering the authorization form
     */
    public function getAuthorizeUrl(
        string $response_type,
        string $client_id,
        string $redirect_uri,
        ?string $scope = null,
        ?bool $force_login = null,
        ?string $lang = null,
    ): UriInterface {
        return $this->getUri(
            new AuthorizeRequest(
                $response_type,
                $client_id,
                $redirect_uri,
                $scope,
                $force_login,
                $lang,
            ),
        );
    }

    public function setAccessToken(string|TokenModel $token): self
    {
        if ($token instanceof TokenModel) {
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
     * @template T of \Vazaha\Mastodon\Interfaces\ResultInterface
     *
     * @param \Vazaha\Mastodon\Interfaces\RequestInterface<T> $request
     *
     * @throws \Vazaha\Mastodon\Exceptions\ApiErrorException
     * @throws \Vazaha\Mastodon\Exceptions\BaseUriNotSetException
     *
     * @return T
     */
    public function send(RequestInterface $request): ResultInterface
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
            throw (new ExceptionFactory())->buildApiErrorException($e, $this, $request);
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
