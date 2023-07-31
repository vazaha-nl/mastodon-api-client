<?php

namespace Tools;

use Illuminate\Support\Collection;
use Tools\Enums\ClassType;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Illuminate\Support\Str;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Requests\Request;

class RequestClassTemplate extends ClassTemplate
{
    protected string $template = 'Request.twig';

    public function __construct(
        protected array $methodSpec,
    )
    {
        // var_dump($this->methodSpec); exit();
        $entity = new Entity($this->getNameForSpec($methodSpec));
        parent::__construct($entity);
    }

    protected function getTemplateVars(): array
    {
        $this->imports->add(new ClassName(RequestInterface::class));
        $this->imports->add(new ClassName(HttpMethod::class));
        $this->imports->add(new ClassName(Request::class));

        $returnsEntity = $this->getReturnsEntity();
        $resultClassName = $returnsEntity->toClassName(ClassType::RESULT);

        var_dump($resultClassName);

        $this->imports->add($resultClassName);

        return [
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
            'description' => $this->methodSpec['description'],
            'queryParams' => $this->getQueryParams(),
            'pathParams' => $this->getPathParams(),
            'formParams' => $this->getFormParams(),
            'endpointExpression' => $this->parseUri(),
            'method' => $this->methodSpec['method'],
            'resultClassName' => $resultClassName,
            'allParams' => array_merge(
                $this->getPathParams(),
                $this->getQueryParams(),
                $this->getFormParams(),
            ),
        ];
    }

    protected function getReturnsEntity()
    {
        if (empty($this->methodSpec['returns']) || $this->methodSpec['returns'] === 'empty') {
            return new Entity('EmptyResult');
        }

        return new Entity($this->methodSpec['returns']);
    }

    protected function parseUri(): string
    {
        $endpoint = $this->methodSpec['uri'];
        $sprintfArgs = [];

        while (preg_match('/:([a-z_]+)/', $endpoint, $matches)) {
            // var_dump($matches);
            $endpoint = preg_replace('/:' . $matches[1] . '/', '%s', $endpoint);
            $sprintfArgs[] = $matches[1];
        }

        if (empty($sprintfArgs)) {
            return "'$endpoint'";
        }

        return sprintf(
            'sprintf(\'%s\', %s)',
            $endpoint,
            implode(
                ', ',
                array_map(
                    fn (string $param) => 'urlencode($this->' . $param . ')',
                    $sprintfArgs,
                )
            )
        );

    }

    protected function getPathParams(): array
    {
        return Collection::make($this->methodSpec['pathParams'] ?? [])
            ->map(function (array $paramData) {
                return ClassProperty::fromArray($paramData);
            })
            ->toArray();
    }

    protected function getQueryParams(): array
    {
        return Collection::make($this->methodSpec['queryParams'] ?? [])
            ->map(function (array $paramData) {
                return ClassProperty::fromArray($paramData);
            })
            ->toArray();
    }

    protected function getFormParams(): array
    {
        return Collection::make($this->methodSpec['formParams'] ?? [])
            ->map(function (array $paramData) {
                return ClassProperty::fromArray($paramData);
            })
            ->toArray();
    }

    protected function getClassType(): ClassType
    {
        return ClassType::REQUEST;
    }

    protected function getNameForSpec(array $spec): string
    {
        $namespace = $spec['namespace'];
        $name = $spec['name'];

        return Str::studly($namespace) . '::' . Str::studly($name);
    }

}
