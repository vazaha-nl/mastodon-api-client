<?php

namespace Tools;

use Tools\Enums\ClassType;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Request;

class AbstractRequestClassTemplate extends ClassTemplate
{
    protected string $template = 'AbstractRequest.twig';

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
}
