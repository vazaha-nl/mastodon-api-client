<?php

declare(strict_types=1);

namespace Tools;

use Tools\Enums\ClassType;
use Vazaha\Mastodon\Collections\ModelCollection;

class CollectionClassTemplate extends ClassTemplate
{
    protected string $template = 'Collection.twig';

    protected function getTemplateVars(): array
    {
        $this->imports
            ->add($this->entity->toClassName(ClassType::MODEL))
            ->add(new ClassName(ModelCollection::class));

        return [
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'modelClassname' => $this->entity->getBaseClassName(ClassType::MODEL),
            'modelFQN' => $this->entity->getFQN(ClassType::MODEL),
            'classImports' => $this->imports,
        ];
    }

    protected function getClassType(): ClassType
    {
        return ClassType::COLLECTION;
    }
}
