<?php

declare(strict_types=1);

namespace Tools;

use Tools\Enums\ClassType;
use Vazaha\Mastodon\Abstracts\ModelCollection;

class CollectionClassTemplate extends ClassTemplate
{
    protected function getTemplateVars(): array
    {
        $this->imports->add($this->entity->toClassName(ClassType::MODEL));
        $this->imports->add(new ClassName(ModelCollection::class));

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

    protected function getTemplateName(): string
    {
        return 'Collection.twig';
    }
}
