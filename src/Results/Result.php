<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Factories\ModelFactory;
use Vazaha\Mastodon\Interfaces\ModelInterface;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Results\Concerns\HasPaging;

class Result implements ResultInterface
{
    use HasPaging;

    /**
     * @var array<\Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    protected array $models;

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
            $modelFactory = new ModelFactory();

            $decoded = $this->getDecodedBody();

            // TODO FIXME this might be tricky
            if (!array_is_list($decoded)) {
                $decoded = [$decoded];
            }

            $this->models = array_map(function ($modelData) use ($modelFactory) {
                return $modelFactory->build($this->request->getModelClass(), $modelData);
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
     * @return array<int|string, mixed[]>
     */
    public function getDecodedBody(): array
    {
        $decoded = json_decode($this->httpResponse->getBody()->getContents(), true);

        if (!is_array($decoded)) {
            return [];
        }

        return $decoded;
    }
}
