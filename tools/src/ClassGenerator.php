<?php

declare(strict_types=1);

namespace Tools;

class ClassGenerator
{
    protected EntitySpecsRepository $entitySpecsRepository;

    protected MethodSpecsRepository $methodSpecsRepository;

    public function __construct(
        protected bool $overwriteExisting = false,
    ) {
        $this->methodSpecsRepository = new MethodSpecsRepository();
        $this->entitySpecsRepository = new EntitySpecsRepository();
    }

    public function generateAll(): void
    {
        $this->generateModels();
        $this->generateCollections();
        $this->generateRequests();
        $this->generateResults();
        $this->generateProxies();
        $this->generateTests();
    }

    public function generateModels(): void
    {
        foreach ($this->entitySpecsRepository->getAllEntityNames() as $name) {
            $entity = new Entity($name);
            $classTemplate = new ModelClassTemplate($entity);

            printf('Generating model class for ' . $entity->name . \PHP_EOL);
            $classTemplate->write(true);
        }
    }

    public function generateCollections(): void
    {
        foreach ($this->entitySpecsRepository->getNamesWithCollection() as $name) {
            $entity = new Entity($name);
            $classTemplate = new CollectionClassTemplate($entity);

            printf('Generating collection class for ' . $entity->name . \PHP_EOL);
            $classTemplate->write(true);
        }
    }

    public function generateRequests(): void
    {
        foreach ($this->methodSpecsRepository->getAllMethodSpecs() as $spec) {
            $template = new RequestClassTemplate($spec);
            printf('Generating request class for ' . $template->entity->name . \PHP_EOL);
            $template->write(true);
        }
    }

    public function generateResults(): void
    {
        foreach ($this->methodSpecsRepository->getAllReturnedEntities() as $entityName) {
            $entity = new Entity($entityName);

            $template = new ResultClassTemplate($entity);
            printf('Generating result class for ' . $template->entity->name . \PHP_EOL);
            $template->write(true);
        }
    }

    public function generateProxies(?string $name = null, ?array $specs = null): void
    {
        if ($specs === null) {
            $specs = $this->methodSpecsRepository->getMethodSpecs();
        }

        $entityName = $name ?? 'Methods';
        $entity = new Entity($entityName);

        if (isset($specs['methods'])) {
            printf('Generating proxy class for ' . $entity->name . \PHP_EOL);

            $template = new ProxyClassTemplate(
                $entity,
                $specs,
            );
            $template->write($this->overwriteExisting);

            return;
        }

        if (isset($specs['namespaces'])) {
            printf('Generating proxy container class for ' . $entity->name . \PHP_EOL);

            $template = new ProxyContainerClassTemplate(
                $entity,
                $specs,
            );
            $template->write($this->overwriteExisting);

            foreach ($specs['namespaces'] as $namespace => $namespaceSpecs) {
                $this->generateProxies($namespace, $namespaceSpecs);
            }

            return;
        }
    }

    public function generateTests(): void
    {
        foreach ($this->entitySpecsRepository->getAllEntityNames() as $entityName) {
            $spec = $this->entitySpecsRepository->getEntityData($entityName);

            if (empty($spec['exampleJson'])) {
                continue;
            }

            $decoded = json_decode($spec['exampleJson'], true);

            if (!is_array($decoded)) {
                continue;
            }

            $entity = new Entity($entityName);
            printf('Generating test class for ' . $entity->name . \PHP_EOL);
            $template = new TestClassTemplate($entity, $spec);
            $template->write(true);
        }
    }
}
