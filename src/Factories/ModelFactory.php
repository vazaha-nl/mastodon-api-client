<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use Vazaha\Mastodon\Interfaces\ModelInterface;
use Vazaha\Mastodon\Interfaces\RequestInterface;

class ModelFactory
{
    /**
     * @param mixed[] $modelData
     *
     * @throws \Vazaha\Mastodon\Exceptions\BaseUriNotSetException
     */
    public function build(RequestInterface $request, array $modelData): ModelInterface
    {
        return $request->createModel()
            ->fillFromArray($modelData);
    }
}
