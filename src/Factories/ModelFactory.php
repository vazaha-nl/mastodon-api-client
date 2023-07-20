<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\Contracts\ModelContract;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;

class ModelFactory
{
    /**
     * @param mixed[] $modelData
     *
     * @throws \LogicException
     * @throws \Vazaha\Mastodon\Exceptions\BaseUriNotSetException
     */
    public function build(ApiClient $apiClient, RequestContract $request, array $modelData): ModelContract
    {
        return $request->createModel()
            ->fillFromArray($modelData)
            ->setBaseUri($apiClient->getBaseUri());
    }
}
