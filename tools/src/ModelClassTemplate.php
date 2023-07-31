<?php

declare(strict_types=1);

namespace Tools;

use Tools\Enums\ClassType;
use Tools\Traits\LoadsEntitySpecs;
use Vazaha\Mastodon\Models\Model;

class ModelClassTemplate extends ClassTemplate
{
    use LoadsEntitySpecs;

    public ClassNameRepository $collectionClasses;

    protected string $template = 'Model.twig';

    protected function getTemplateVars(): array
    {
        $specs = $this->loadEntitySpecs();
        $this->imports->add(new ClassName(Model::class));

        return [
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
            'properties' => $this->getProperties(),
            'description' => $this->entitySpecs[$this->entity->name]['description'] ?? '',
        ];
    }

    protected function getProperties(): array
    {
        $this->collectionClasses = new ClassNameRepository();

        $properties = $this->entitySpecs[$this->entity->name]['properties'];

        $p = [];

        foreach ($properties as $propertyArray) {
            $property = ClassProperty::fromArray($propertyArray);

            if (!$property->show) {
                continue;
            }

            if ($property->type instanceof ClassName) {
                $this->imports->add($property->type);

                if (str_contains($property->type->getFQN(), 'Vazaha/Mastodon/Collections')) {
                    $this->collectionClasses->add($property->type);
                }
            }

            $p[] = $property;
        }

        return $p;
    }

    protected function getClassType(): ClassType
    {
        return ClassType::MODEL;
    }
}
