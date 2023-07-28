<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Factories\ModelFactory;
use Vazaha\Mastodon\Interfaces\ModelInterface;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\EmptyResponseModel;
use Vazaha\Mastodon\Results\Concerns\HasPaging;

class Result implements ResultInterface
{
    use HasPaging;

    /**
     * @var array<\Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    protected array $models;

    /**
     * @template T of \Vazaha\Mastodon\Interfaces\ResultInterface
     *
     * @param \Vazaha\Mastodon\Interfaces\RequestInterface<T> $request
     */
    public function __construct(
        protected ApiClient $apiClient,
        protected RequestInterface $request,
        protected ResponseInterface $httpResponse,
    ) {
    }

    /**
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     *
     * @return array<\Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    public function getModels(): array
    {
        if (!isset($this->models)) {
            $decoded = $this->getDecodedBody();

            if ($decoded === null) {
                return $this->models = [];
            }

            $modelFactory = new ModelFactory();

            if (!array_is_list($decoded)) {
                $decoded = [$decoded];
            }

            $this->models = array_map(function ($modelData) use ($modelFactory) {
                return $modelFactory->build($this->getModelClass(), $modelData);
            }, $decoded);
        }

        return $this->models;
    }

    public function getModel(): ?ModelInterface
    {
        return $this->getModels()[0] ?? null;
    }

    public function getCount(): int
    {
        return count($this->getModels());
    }

    /**
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

        $json = $this->httpResponse->getBody()->getContents();
        $decoded = json_decode($json, true);

        if (!is_array($decoded)) {
            throw new InvalidResponseException('could not decode json : ' . $json);
        }

        return $decoded;
    }

    public function getHttpResponse(): ResponseInterface
    {
        return $this->httpResponse;
    }

    public function getModelClass(): string
    {
        return EmptyResponseModel::class;
    }

    protected function isJson(): bool
    {
        return $this->httpResponse->getHeader('content-type')[0] === 'application/json';
    }
}
