<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use LogicException;
use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Interfaces\ModelInterface;

class ModelFactory
{
    /**
     * @template T of \Vazaha\Mastodon\Abstracts\Model
     *
     * @param class-string<T> $className
     * @param mixed[]         $modelData
     *
     * @return T
     */
    public function build(string $className, array $modelData): ModelInterface
    {
        if (!is_a($className, Model::class, true)) {
            throw new LogicException($className . ' is not a subclass of ' . Model::class);
        }

        return $className::fromArray($modelData);
    }
}
