<?php

declare(strict_types=1);

namespace Tools;

use Tools\Enums\ClassType;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Results\Result;

class ResultClassTemplate extends ClassTemplate
{
    protected string $template = 'Result.twig';

    protected function getTemplateVars(): array
    {
        $modelClassName = $this->entity->toClassName(ClassType::MODEL);
        $resultClassName = $this->entity->toClassName(ClassType::RESULT);

        $requestClassName = $this->entity->toClassName(ClassType::REQUEST);

        $this->imports->add($modelClassName);
        $this->imports->add($resultClassName);
        $this->imports->add(new ClassName(ResultInterface::class));
        $this->imports->add(new ClassName(Result::class));

        // var_dump($modelClassName); exit;

        return [
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
            'modelClassName' => $modelClassName,
            'resultClassName' => $resultClassName,
            'requestClassName' => $requestClassName,
        ];
    }

    protected function getClassType(): ClassType
    {
        return ClassType::RESULT;
    }
}
