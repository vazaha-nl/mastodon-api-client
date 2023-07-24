<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use LogicException;
use Vazaha\Mastodon\Interfaces\ModelInterface;
use Vazaha\Mastodon\Models\Model;

class ModelFactory
{
    /**
     * @template T of \Vazaha\Mastodon\Models\Model
     *
     * @param class-string<T> $className
     * @param mixed[]         $modelData
     *
     * @return T
     */
    public function build(string $className, array $modelData): ModelInterface
    {
        if (is_a($className, Model::class, true)) {
            throw new LogicException($className . ' is not a subclass of ' . Model::class);
        }

        return (new $className())
            ->fillFromArray($modelData);
    }
}
