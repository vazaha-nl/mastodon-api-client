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
