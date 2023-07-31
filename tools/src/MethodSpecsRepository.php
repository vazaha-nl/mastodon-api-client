<?php

namespace Tools;

use Illuminate\Support\Collection;
use Tools\Traits\LoadsMethodSpecs;
use Illuminate\Support\Str;

class MethodSpecsRepository
{
    use LoadsMethodSpecs;

    public function getAllMethodSpecs(): array
    {
        $this->loadMethodSpecs();
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

    public function getNameForSpec(array $spec): string
    {
        $namespace = $spec['namespace'];
        $name = $spec['name'];

        return Str::studly($namespace) . '::' . Str::studly($name);
    }
}
