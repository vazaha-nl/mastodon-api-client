<?php

declare(strict_types=1);

namespace Tools;

use DateTimeInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Tools\Enums\ClassType;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Interfaces\RequestInterface;

class RequestClassTemplate extends ClassTemplate
{
    public function __construct(
        protected array $methodSpec,
    ) {
        $entity = new Entity($this->getNameForSpec($methodSpec));
        parent::__construct($entity);
    }

    protected function getTemplateVars(): array
    {
        $this->imports->add(new ClassName(RequestInterface::class));
        $this->imports->add(new ClassName(HttpMethod::class));
        $this->imports->add(new ClassName(DateTimeInterface::class));
        $this->imports->add(new ClassName(UploadFile::class));

        $returnsEntity = $this->getReturnsEntity();
        $requestClassName = $returnsEntity->toClassName(ClassType::REQUEST);
        $resultClassName = $returnsEntity->toClassName(ClassType::RESULT);

        $this->imports->add($requestClassName);

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
            'requestClassName' => $requestClassName,
            'resultClassName' => $resultClassName,
            'allParams' => $this->getAllParams(),
            'url' => $this->methodSpec['url'] ?? '',
        ];
    }

    protected function getAllParams(): array
    {
        return Collection::make($this->getPathParams())
            ->concat($this->getQueryParams())
            ->concat($this->getFormParams())
            ->sortBy(static fn (ClassProperty $property) => $property->nullable ? 1 : 0)
            ->values()
            ->toArray();
    }

    protected function getReturnsEntity()
    {
        if (empty($this->methodSpec['returns']) || $this->methodSpec['returns'] === 'empty') {
            return new Entity('EmptyOrUnknownResponse');
        }

        $entityName = $this->methodSpec['returns'];

        if (preg_match('/array\<(.*)\>/', $entityName, $matches)) {
            $entityName = $matches[1];
        }

        return new Entity($entityName);
    }

    protected function parseUri(): string
    {
        $endpoint = $this->methodSpec['uri'];

        $sprintfArgs = [];

        while (preg_match('/:([a-z_]+)/', $endpoint, $matches)) {
            $endpoint = preg_replace('/:' . $matches[1] . '/', '%s', $endpoint);
            $sprintfArgs[] = $matches[1];
        }

        if (empty($sprintfArgs)) {
            return "'{$endpoint}'";
        }

        return sprintf(
            'sprintf(\'%s\', %s)',
            $endpoint,
            implode(
                ', ',
                array_map(
                    static fn (string $param) => 'urlencode($this->' . $param . ')',
                    $sprintfArgs,
                ),
            ),
        );
    }

    protected function getPathParams(): array
    {
        return Collection::make($this->methodSpec['pathParams'] ?? [])
            ->map(static function (array $paramData) {
                return ClassProperty::fromArray($paramData);
            })
            ->toArray();
    }

    protected function getQueryParams(): array
    {
        return Collection::make($this->methodSpec['queryParams'] ?? [])
            ->map(static function (array $paramData) {
                return ClassProperty::fromArray($paramData);
            })
            ->toArray();
    }

    protected function getFormParams(): array
    {
        return Collection::make($this->methodSpec['formParams'] ?? [])
            ->map(static function (array $paramData) {
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

    protected function getTemplateName(): string
    {
        return 'Request.twig';
    }
}
