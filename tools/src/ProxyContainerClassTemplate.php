<?php

declare(strict_types=1);

namespace Tools;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Tools\Enums\ClassType;
use Vazaha\Mastodon\ApiClient;

class ProxyContainerClassTemplate extends ClassTemplate
{
    public function __construct(
        Entity $entity,
        protected array $namespaces,
    ) {
        parent::__construct($entity);
    }

    protected function getTemplateName(): string
    {
        return 'ProxyContainer.twig';
    }

    protected function getTemplateVars(): array
    {
        $proxies = Collection::make($this->getProxyClassNames())
            ->map(static function (ClassName $className) {
                $name = Str::camel($className->getBaseName());
                $name = str_replace('Proxy', '', $name);

                return [
                    'name' => $name,
                    'className' => $className,
                ];
            })
            ->toArray();

        $this->imports->add(new ClassName(ApiClient::class));

        return [
            'proxies' => $proxies,
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
        ];
    }

    protected function getClassType(): ClassType
    {
        return ClassType::PROXY;
    }

    protected function getProxyClassNames(): array
    {
        return Collection::make($this->namespaces)
            ->map(function (string $namespace) {
                $entityName = Str::studly($namespace);
                $entity = new Entity($entityName);

                $className = ClassName::fromEntity($entity, ClassType::PROXY);

                $this->imports->add($className);

                return $className;
            })
            ->toArray();
    }
}
