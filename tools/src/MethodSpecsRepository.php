<?php

declare(strict_types=1);

namespace Tools;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Tools\Traits\LoadsMethodSpecs;

class MethodSpecsRepository
{
    use LoadsMethodSpecs;

    public function getAllMethodSpecs(?array $root = null): array
    {
        $this->loadMethodSpecs();

        if ($root === null) {
            $root = $this->methodSpecs;
        }

        $specs = [];

        foreach ($root['namespaces'] as $namespaceName => $namespaceSpec) {
            if (isset($namespaceSpec['methods'])) {
                foreach ($namespaceSpec['methods'] as $name => $method) {
                    $specs[] = $method;
                }
            }

            if (isset($namespaceSpec['namespaces'])) {
                foreach ($this->getAllMethodSpecs($namespaceSpec) as $method) {
                    $specs[] = $method;
                }
            }
        }

        return $specs;
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
