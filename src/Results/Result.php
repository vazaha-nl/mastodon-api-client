<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Illuminate\Support\Collection;
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
     * @var \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    protected Collection $models;

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
     * @return \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    public function getModels(): Collection
    {
        if (!isset($this->models)) {
            $decoded = $this->getDecodedBody();

            if ($decoded === null) {
                return $this->models = new Collection();
            }

            $modelFactory = new ModelFactory();

            if (!array_is_list($decoded)) {
                $decoded = [$decoded];
            }

            $this->models = Collection::make($decoded)
                ->map(fn (array $modelData) => $modelFactory->build($this->getModelClass(), $modelData));
        }

        return $this->models;
    }

    public function getModel(): ?ModelInterface
    {
        return $this->getModels()->first();
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
        return str_contains($this->httpResponse->getHeader('content-type')[0], 'application/json');
    }
}
