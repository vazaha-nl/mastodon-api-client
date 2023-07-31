<?php

declare(strict_types=1);

namespace Tools;

use Tools\Enums\ClassType;

class ClassName
{
    protected ?string $alias = null;

    protected ?Entity $entity = null;

    protected ?ClassType $classType = null;

    public function __construct(
        protected string $fqn,
    ) {
    }

    public function __toString(): string
    {
        return $this->toTypeString();
    }

    public static function fromEntity(Entity $entity, ClassType $classType): static
    {
        $static = new static($entity->getFQN($classType));
        $static->entity = $entity;
        $static->classType = $classType;

        return $static;
    }

    public function getEntity(): ?Entity
    {
        return $this->entity ?? null;
    }

    public function getClassType(): ?ClassType
    {
        return $this->classType ?? null;
    }

    public function getFQN(): string
    {
        return $this->fqn;
    }

    // Foo\Bar\Boo => Boo
    public function getBaseName(): string
    {
        $parts = $this->getParts();

        return array_pop($parts);
    }

    // Foo\Bar\Boo => Foo\Bar
    public function getNamespace(): ?string
    {
        $parts = $this->getParts();

        array_pop($parts);

        return implode('\\', $parts);
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(string $alias): void
    {
        $this->alias = $alias;
    }

    public function generateAlias(): static
    {
        $parts = $this->getParts();
        $baseName = array_pop($parts);
        $prefix = array_pop($parts);
        $alias = $prefix . $baseName;
        $this->setAlias($alias);

        return $this;
    }

    public function toImportString(): string
    {
        $string = 'use ' . $this->getFQN();

        if ($this->alias !== null) {
            $string .= ' as ' . $this->alias;
        }

        $string .= ';';

        return $string;
    }

    public function toTypeString(): string
    {
        if ($this->getAlias()) {
            return $this->getAlias();
        }

        return $this->getBaseName();
    }

    protected function getParts(): array
    {
        if (!str_contains($this->fqn, '\\')) {
            return [$this->fqn];
        }

        return explode('\\', $this->fqn);
    }
}
