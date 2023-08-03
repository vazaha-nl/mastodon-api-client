<?php

declare(strict_types=1);

namespace Tools;

use PHPUnit\Framework\TestCase;
use Tools\Enums\ClassType;

class TestClassTemplate extends ClassTemplate
{
    public function __construct(
        Entity $entity,
        protected array $spec,
    ) {
        parent::__construct($entity);
    }

    protected function getTemplateName(): string
    {
        return 'Test.twig';
    }

    protected function getTemplateVars(): array
    {
        $this->imports->add(new ClassName(TestCase::class));
        $modelClass = ClassName::fromEntity($this->entity, ClassType::MODEL);
        $this->imports->add($modelClass);

        return [
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
            'json' => $this->spec['exampleJson'],
            'modelClass' => $modelClass,
        ];
    }

    protected function getClassType(): ClassType
    {
        return ClassType::TEST;
    }
}
