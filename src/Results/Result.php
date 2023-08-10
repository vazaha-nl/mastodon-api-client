<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Illuminate\Support\Collection;
use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Factories\ModelFactory;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Results\Concerns\HasPaging;

class Result extends Collection implements ResultInterface
{
    use HasPaging;

    protected ApiClient $apiClient;

    protected RequestInterface $request;

    protected ResponseInterface $httpResponse;

    /**
     * @template T of \Vazaha\Mastodon\Interfaces\ResultInterface
     *
     * @param \Vazaha\Mastodon\Interfaces\RequestInterface<T> $request
     */
    public function init(
        ApiClient $apiClient,
        RequestInterface $request,
        ResponseInterface $httpResponse,
    ): void {
        $this->apiClient = $apiClient;
        $this->request = $request;
        $this->httpResponse = $httpResponse;

        $this->constructModels();
    }

    /**
     * Get the undecoded http body.
     */
    public function getBody(): string
    {
        return (string) $this->httpResponse->getBody();
    }

    /**
     * Get the decoded json body, or null for non-json/undecodable responses.
     *
     * @throws \RuntimeException
     * @throws \Vazaha\Mastodon\Exceptions\InvalidResponseException
     *
     * @return null|array<int|string, mixed[]>
     */
    public function getDecodedBody(): ?array
    {
        if (!$this->isJson()) {
            return null;
        }

        $decoded = json_decode($this->getBody(), true);

        if (!is_array($decoded)) {
            return null;
        }

        return $decoded;
    }

    /**
     * Get the full http response object.
     */
    public function getHttpResponse(): ResponseInterface
    {
        return $this->httpResponse;
    }

    public function getModelClass(): string
    {
        return EmptyOrUnknownModel::class;
    }

    protected function constructModels(): void
    {
        $decoded = $this->getDecodedBody();

        if ($decoded === null || !is_array($decoded)) {
            return;
        }

        $modelFactory = new ModelFactory();

        if (!array_is_list($decoded)) {
            $decoded = [$decoded];
        }

        foreach ($decoded as $modelData) {
            if (!is_array($modelData)) {
                continue;
            }

            $model = $modelFactory->build($this->getModelClass(), $modelData);
            $this->add($model);
        }
    }

    protected function isJson(): bool
    {
        return str_contains($this->httpResponse->getHeader('content-type')[0], 'application/json');
    }
}
