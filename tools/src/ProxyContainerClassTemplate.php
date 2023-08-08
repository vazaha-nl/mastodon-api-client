<?php

declare(strict_types=1);

namespace Tools;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Tools\Enums\ClassType;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Proxies\Proxy;

class ProxyContainerClassTemplate extends ClassTemplate
{
    public function __construct(
        Entity $entity,
        protected array $methodSpecs,
    ) {
        parent::__construct($entity);
    }

    protected function getTemplateName(): string
    {
        return 'ProxyContainer.twig';
    }

    protected function getTemplateVars(): array
    {
        $this->imports->add(new ClassName(Proxy::class));
        $this->imports->add(new ClassName(ApiClient::class));

        return [
            'proxies' => $this->getProxies(),
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
        ];
    }

    protected function getClassType(): ClassType
    {
        return ClassType::PROXY;
    }

    protected function getProxies(): array
    {
        return Collection::make($this->methodSpecs['namespaces'])
            ->map(function (array $spec, string $namespace) {
                $entityName = Str::studly($namespace);
                $entity = new Entity($entityName);

                $className = ClassName::fromEntity($entity, ClassType::PROXY);

                $this->imports->add($className);

                $name = Str::camel($className->getBaseName());
                $name = str_replace('Proxy', '', $name);

                return [
                    'name' => $name,
                    'className' => $className,
                    'description' => $spec['description'] ?? '',
                    'url' => $spec['url'] ?? '',
                ];
            })
            ->sortBy('name')
            ->toArray();
    }
}
