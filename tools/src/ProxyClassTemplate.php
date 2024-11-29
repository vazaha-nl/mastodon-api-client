<?php

declare(strict_types=1);

namespace Tools;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Tools\Enums\ClassType;
use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Helpers\UploadFile;

class ProxyClassTemplate extends ClassTemplate
{
    public function __construct(
        Entity $entity,
        protected array $spec,
    ) {
        parent::__construct($entity);
    }

    protected function getTemplateName(): string
    {
        return 'Proxy.twig';
    }

    protected function getTemplateVars(): array
    {
        $this->imports->add(new ClassName(InvalidResponseException::class));
        $this->imports->add(new ClassName(Proxy::class));
        $this->imports->add(new ClassName(ApiClient::class));
        $this->imports->add(new ClassName(\DateTimeInterface::class));
        $this->imports->add(new ClassName(UploadFile::class));

        $methods = $this->getMethods();

        return [
            'namespace' => $this->entity->getNamespace($this->getClassType()),
            'classname' => $this->entity->getBaseClassName($this->getClassType()),
            'classImports' => $this->imports,
            'methods' => $methods,
        ];
    }

    protected function getClassType(): ClassType
    {
        return ClassType::PROXY;
    }

    protected function getMethods(): array
    {
        return Collection::make($this->spec['methods'])
            ->map(function (array $methodSpec) {
                $allParams = [];

                foreach (['pathParams', 'queryParams', 'formParams'] as $paramType) {
                    $methodSpec[$paramType] = array_map(
                        static fn (array $param) => ClassProperty::fromArray($param),
                        $methodSpec[$paramType],
                    );
                    $allParams = array_merge(
                        $allParams,
                        $methodSpec[$paramType],
                    );
                }

                if ($methodSpec['returns'] === 'EmptyOrUnknown') {
                    $methodSpec['returnsArray'] = true;
                }

                $methodSpec['name'] = Str::camel($methodSpec['name']);
                $methodSpec['allParams'] = Collection::make($allParams)
                    ->sortBy('nullable')
                    ->values()
                    ->toArray();

                $modelClass = ClassName::fromEntity(new Entity($methodSpec['returns']), ClassType::MODEL);
                $requestClass = ClassName::fromEntity(new Entity($this->getNameForSpec($methodSpec)), ClassType::REQUEST);
                $resultClass = ClassName::fromEntity(new Entity($methodSpec['returns']), ClassType::RESULT);

                $methodSpec['modelClass'] = $this->imports->add($modelClass);
                $methodSpec['requestClass'] = $this->imports->add($requestClass);
                $methodSpec['resultClass'] = $this->imports->add($resultClass);

                return $methodSpec;
            })
            ->sortBy('name')
            ->values()
            ->toArray();
    }

    protected function getNameForSpec(array $spec): string
    {
        $namespace = $spec['namespace'];
        $name = $spec['name'];

        return Str::studly($namespace) . '::' . Str::studly($name);
    }
}
