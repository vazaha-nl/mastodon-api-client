<?php

declare(strict_types=1);

namespace Tools;

use Illuminate\Support\Collection;
use Tools\Enums\ClassType;
use Tools\Traits\LoadsEntitySpecs;

class EntitySpecsRepository
{
    use LoadsEntitySpecs;

    public function getEntityData(string $name): ?array
    {
        $this->loadEntitySpecs();

        return $this->entitySpecs[$name] ?? null;
    }

    public function getEntityProperties(string $name): ?array
    {
        $data = $this->entitySpecs[$name] ?? null;

        if ($data === null) {
            return null;
        }

        return array_map(
            static fn (array $propertyData) => ClassProperty::fromArray($propertyData),
            $data['properties'] ?? [],
        );
    }

    public function getAllEntityNames(): array
    {
        $this->loadEntitySpecs();

        return array_keys($this->entitySpecs);
    }

    public function getNamesWithCollection(): array
    {
        $names = Collection::make();

        foreach ($this->getAllEntityNames() as $name) {
            $properties = $this->getEntityProperties($name);

            $inThisEntity = Collection::make($properties)
                ->filter(static function (ClassProperty $classProperty) {
                    $type = $classProperty->type;

                    if (!$type instanceof ClassName) {
                        return false;
                    }

                    $entity = $type->getEntity();

                    if ($entity) {
                        echo $entity->name . ' ';
                    }

                    $classType = $type->getClassType();

                    if ($classType) {
                        echo $classType->value . \PHP_EOL;
                    }

                    return ($entity !== null) && ($classType === ClassType::COLLECTION);
                })
                ->map(static function (ClassProperty $property) {
                    return $property->type->getEntity()->name;
                })
                ->values()
                ->toArray();

            $names = $names->concat($inThisEntity);
        }

        return $names->toArray();
    }
}
