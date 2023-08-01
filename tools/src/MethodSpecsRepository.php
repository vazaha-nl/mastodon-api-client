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

    public function getAllReturnedEntities(): array
    {
        $allSpecs = $this->getAllMethodSpecs();

        return Collection::make($allSpecs)
            ->map(static fn (array $spec) => $spec['returns'])
            ->map(static function ($returns) {
                if (empty($returns) || $returns === 'empty') {
                    return 'EmptyOrUnknownResponse';
                }

                return $returns;
            })
            ->unique()
            ->values()
            ->toArray();
    }
}
