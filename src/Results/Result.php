<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Factories\ModelFactory;
use Vazaha\Mastodon\Interfaces\ModelInterface;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;

class Result implements ResultInterface
{
    /**
     * @var null|array<int, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    protected ?array $models;

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
     * @return null|array<int, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    public function getModels(): ?array
    {
        if (!isset($this->models)) {
            $modelFactory = new ModelFactory();

            $decoded = $this->getDecodedBody();

            if ($decoded === null) {
                return null;
            }

            // TODO FIXME this might be tricky
            if (!array_is_list($decoded)) {
                $decoded = [$decoded];
            }

            $this->models = array_map(function ($modelData) use ($modelFactory) {
                return $modelFactory->build($this->request, $modelData);
            }, $decoded);
        }

        return $this->models;
    }

    public function getModel(): ?ModelInterface
    {
        if ($this->getModels() === null) {
            return null;
        }

        return $this->getModel()[0] ?? null;
    }

    public function getCount(): int
    {
        if ($this->getModels() === null) {
            return 0;
        }

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
        $decoded = json_decode($this->httpResponse->getBody()->getContents(), true);

        if (!is_array($decoded)) {
            return null;
        }

        return $decoded;
    }
}
