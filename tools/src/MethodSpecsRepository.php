<?php

declare(strict_types=1);

namespace Tools;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Tools\Traits\LoadsMethodSpecs;

class MethodSpecsRepository
{
    use LoadsMethodSpecs;

    public function getAllMethodSpecs(): array
    {
        $this->loadMethodSpecs();

        $specs = [];

        foreach ($this->methodSpecs as $namespaceName => $namespaceSpec) {
            foreach ($namespaceSpec['methods'] as $name => $method) {
                $specs[$name] = $method;
            }
        }

        return $specs;

        return Collection::make($this->methodSpecs)
            ->flatten(1)
            ->values()
            ->toArray();
    }

    public function get(string $namespace, string $name): ?array
    {
        $this->loadMethodSpecs();

        return $this->methodSpecs[$namespace][$name] ?? null;
    }

    public function getNamespaces(): array
    {
        $this->loadMethodSpecs();

        return array_keys($this->methodSpecs);
    }

    public function getMethodsForNamespace(string $namespace): ?array
    {
        $this->loadMethodSpecs();

        return $this->methodSpecs[$namespace] ?? null;
    }

    public function getNameForSpec(array $spec): string
    {
        $namespace = $spec['namespace'];
        $name = $spec['name'];

        return Str::studly($namespace) . '::' . Str::studly($name);
    }

    public function getAllReturnedEntities(): array
    {
        $allSpecs = $this->getAllMethodSpecs();

        return Collection::make($allSpecs)
            ->map(static fn (array $spec) => $spec['returns'])
            ->map(static function ($returns) {
                if (empty($returns) || $returns === 'empty') {
                    return 'EmptyOrUnknownResponse';
                }

                if (preg_match('/array<(.*)>/', $returns, $matches)) {
                    return $matches[1];
                }

                return $returns;
            })
            ->unique()
            ->values()
            ->toArray();
    }
}
