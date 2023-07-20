<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Responses;

use Illuminate\Support\Collection;
use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Factories\ModelFactory;
use Vazaha\Mastodon\Models\Contracts\ModelContract;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;
use Vazaha\Mastodon\Responses\Contracts\ResponseContract;

class Response implements ResponseContract
{
    /**
     * @var \Illuminate\Support\Collection<int, \Vazaha\Mastodon\Models\Contracts\ModelContract>
     */
    protected Collection $models;

    public function __construct(
        protected ApiClient $apiClient,
        protected RequestContract $request,
        protected ResponseInterface $httpResponse,
    ) {
    }

    /**
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     *
     * @return \Illuminate\Support\Collection<int, \Vazaha\Mastodon\Models\Contracts\ModelContract>
     */
    public function getModels(): Collection
    {
        if (!isset($this->models)) {
            $modelFactory = new ModelFactory();

            $results = $this->getResults();

            // TODO FIXME this might be tricky
            if (!array_is_list($results)) {
                $results = [$results];
            }

            $this->models = Collection::make($results)
                ->map(function ($modelData) use ($modelFactory) {
                    return $modelFactory->build($this->apiClient, $this->request, $modelData);
                });
        }

        return $this->models;
    }

    public function getModel(): ?ModelContract
    {
        return $this->getModels()->first();
    }

    public function getCount(): int
    {
        return $this->getModels()->count();
    }

    /**
     * @throws \RuntimeException
     * @throws \Vazaha\Mastodon\Exceptions\InvalidResponseException
     *
     * @return array<int|string, mixed[]>
     */
    public function getResults(): array
    {
        $decoded = json_decode($this->httpResponse->getBody()->getContents(), true);

        if (!is_array($decoded)) {
            // TODO FIXME some context would be nice
            throw new InvalidResponseException();
        }

        return $decoded;
    }
}
