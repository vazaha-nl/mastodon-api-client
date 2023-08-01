<?php

declare(strict_types=1);

namespace Tools;

use Illuminate\Support\Collection;

class ClassNameRepository
{
    public Collection $collection;

    public function __construct(
        protected ?ClassName $referenceClassName = null,
    ) {
        $this->collection = new Collection();

        if ($referenceClassName !== null) {
            $this->collection->add($referenceClassName);
        }
    }

    public function add(ClassName $className): static
    {
        if ($this->findByFQN($className->getFQN()) !== null) {
            return $this;
        }

        if ($this->findByBaseName($className->getBaseName()) !== null) {
            $className = $className->generateAlias();
        }

        $this->collection->add($className);

        return $this;
    }

    public function findByFQN(string $fqn)
    {
        return $this->collection
            ->firstWhere(static fn (ClassName $className) => $className->getFQN() === $fqn);
    }

    public function findByBaseName(string $baseName)
    {
        return $this->collection
            ->firstWhere(static fn (ClassName $className) => $className->getBaseName() === $baseName);
    }

    public function findByAlias(string $alias)
    {
        return $this->collection
            ->firstWhere(static fn (ClassName $className) => $className->getAlias() === $alias);
    }

    public function contains(ClassName $c): bool
    {
        return $this->collection
            ->where(static fn (ClassName $className) => $className->getFQN() === $c->getFQN())
            ->isNotEmpty();
    }

    /**
     * @template TKey of array-key
     * @template TModel of \Tools\ClassName
     *
     * @return \Illuminate\Support\Collection<TKey, TModel>
     */
    public function get(): Collection
    {
        return $this->collection
            ->when($this->referenceClassName !== null, function (Collection $collection) {
                return $collection->filter(fn (ClassName $className) => $className->getNamespace() !== $this->referenceClassName->getNamespace());
            })
            ->sortBy(static fn (ClassName $className) => $className->getFQN())
            ->values();
    }
}
