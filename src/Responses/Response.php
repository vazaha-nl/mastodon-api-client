<?php

namespace Vazaha\Mastodon\Responses;

use Illuminate\Support\Collection;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Requests\Request;
use GuzzleHttp\Psr7\Response as Psr7Response;
use Vazaha\Mastodon\Models\Model;

class Response
{
    protected Collection $models;

    public function __construct(
        protected ApiClient $apiClient,
        protected Request $request,
        protected Psr7Response $httpResponse,
    ) {
        //
    }

    /**
     * @return \Illuminate\Support\Collection|\Vazaha\Mastodon\Models\Model[]
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function getModels(): Collection
    {
        if (!isset($this->models)) {
            $modelClass = $this->getModelClass();

            $this->models = Collection::make($this->getResults())
                ->map(fn ($modelData) => new $modelClass($modelData, $this->apiClient));
        }

        return $this->models;
    }

    public function getModel(): Model
    {
        return $this->getModels()->first();
    }

    public function getCount(): int
    {
        return $this->getModels()->count();
    }

    protected function getResults(): array
    {
        $decoded = json_decode($this->httpResponse->getBody()->getContents(), true);

        if ($decoded === false) {
            return [];
        }

        return array_is_list($decoded) ? $decoded : [$decoded];
    }

    protected function getModelClass(): ?string
    {
        return $this->request->getModelClass();
    }
}
