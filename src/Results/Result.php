<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Illuminate\Support\Collection;
use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
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
     * @var \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    protected Collection $models;

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

        foreach ($this->getModels() as $model) {
            $this->add($model);
        }
    }

    /**
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     *
     * @return \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    protected function getModels(): Collection
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

        $this->httpResponse->getBody()->rewind();
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
        return EmptyOrUnknownModel::class;
    }

    protected function isJson(): bool
    {
        return str_contains($this->httpResponse->getHeader('content-type')[0], 'application/json');
    }
}
