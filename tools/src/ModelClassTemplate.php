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
        $this->imports->add(new ClassName(Model::class));

        return [
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
            'properties' => $this->getProperties(),
        ];
    }

    protected function getProperties(): array
    {
        $specs = $this->loadEntitySpecs();
        $this->collectionClasses = new ClassNameRepository();

        $properties = $specs[$this->entity->name]['properties'];

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
