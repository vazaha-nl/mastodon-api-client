<?php

declare(strict_types=1);

namespace Tools;

use Illuminate\Support\Str;
use Tools\Enums\ClassType;

class Entity
{
    public bool $overwriteExisting = false;

    protected string $projectRoot;

    protected string $rootNamespace = 'Vazaha\\Mastodon';

    public function __construct(
        public string $name,
    ) {
        $this->projectRoot = dirname(__DIR__, 2);
    }

    public function getDirectory(ClassType $classType): string
    {
        return rtrim($this->projectRoot . sprintf('/src/%s', Str::plural($classType->value)) . '/' . $this->getRelativeDirectory(), '/');
    }

    public function getNamespace(ClassType $classType): string
    {
        $namespace = $this->rootNamespace . sprintf('\\%s', Str::plural($classType->value)) . '\\' . $this->getRelativeNamespace();

        return rtrim($namespace, '\\');
    }

    public function getFQN(ClassType $classType): string
    {
        return $this->getNamespace($classType) . '\\' . $this->getBaseClassName($classType);
    }

    public function getPath(ClassType $classType): string
    {
        return $this->getDirectory($classType) . '/' . $this->getBaseClassName($classType) . '.php';
    }

    public function getRelativeNamespace(): string
    {
        // 'Foo'
        // 'Foo::Bar', 'Foo/Bar' is equivalent
        $parts = preg_split('/[\/:]+/', $this->name);
        array_pop($parts);

        return implode('\\', $parts);
    }

    public function getRelativeDirectory(): string
    {
        // 'Foo' => ''
        // 'Foo::Bar', 'Foo/Bar' => 'Foo'
        $parts = preg_split('/[\/:]+/', $this->name);
        array_pop($parts);

        return implode('/', $parts);
    }

    public function getBaseClassName(ClassType $classType): string
    {
        $parts = preg_split('/[\/:]+/', $this->name);

        return array_pop($parts) . $classType->value;
    }

    public function toClassName(ClassType $classType): ClassName
    {
        return new ClassName($this->getFQN($classType));
    }
}
