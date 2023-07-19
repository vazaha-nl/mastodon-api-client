<?php

namespace Vazaha\Mastodon\Responses;

use Illuminate\Support\Collection;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Requests\Request;
use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\Models\Model;
use Vazaha\Mastodon\Factories\ModelFactory;

class Response
{
	/** @var \Illuminate\Support\Collection<int, \Vazaha\Mastodon\Models\Model> **/
    protected Collection $models;

    public function __construct(
        protected ApiClient $apiClient,
        protected Request $request,
        protected ResponseInterface $httpResponse,
    ) {
        //
    }

    /**
     * @return \Illuminate\Support\Collection<int, \Vazaha\Mastodon\Models\Model>
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function getModels(): Collection
    {
    	$modelFactory = new ModelFactory();

        if (!isset($this->models)) {
            $this->models = Collection::make($this->getResults())
                ->map(function ($modelData) use ($modelFactory) {
                	return $modelFactory->create($this->apiClient, $this->request, $modelData);
                });
        }

        return $this->models;
    }

    public function getModel(): ?Model
    {
        return $this->getModels()->first();
    }

    public function getCount(): int
    {
        return $this->getModels()->count();
    }

    /**
     * @return array<int, mixed[]>
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    protected function getResults(): array
    {
        $decoded = json_decode($this->httpResponse->getBody()->getContents(), true);

        if (!is_array($decoded)) {
        	// TODO throw exception?
            return [];
        }

        return array_is_list($decoded) ? $decoded : [$decoded];
    }
}
