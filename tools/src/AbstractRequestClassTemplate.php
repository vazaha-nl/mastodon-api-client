<?php

declare(strict_types=1);

namespace Tools;

use Tools\Enums\ClassType;
use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Interfaces\RequestInterface;

class AbstractRequestClassTemplate extends ClassTemplate
{
    protected function getTemplateVars(): array
    {
        $resultClassName = $this->entity->toClassName(ClassType::RESULT);

        $this->imports->add($resultClassName);
        $this->imports->add(new ClassName(Request::class));
        $this->imports->add(new ClassName(RequestInterface::class));

        return [
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
            'resultClassName' => $resultClassName,
        ];
    }

    protected function getClassType(): ClassType
    {
        return ClassType::REQUEST;
    }

    protected function getTemplateName(): string
    {
        return 'AbstractRequest.twig';
    }
}
