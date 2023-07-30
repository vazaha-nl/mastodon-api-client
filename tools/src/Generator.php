<?php

declare(strict_types=1);

namespace Tools;

use Tools\Enums\ClassType;
use Twig\Environment;
use Vazaha\Mastodon\Models\Model;

class Generator
{
    public bool $overwriteExisting = false;

    protected Environment $twig;

    protected string $projectRoot;

    protected array $entityData;

    public function __construct(
        protected Entity $entity,
    ) {
        $this->projectRoot = dirname(__DIR__, 2);
        $loader = new \Twig\Loader\FilesystemLoader($this->projectRoot . '/tools/templates');
        $this->twig = new Environment($loader, [
            // 'cache' => $this->projectRoot . '/var/cache/templates',
            'cache' => false,
        ]);

        $this->loadEntityData();
    }

    public function loadEntityData(): array
    {
        if (!isset($this->entityData)) {
            $this->entityData = json_decode(file_get_contents($this->projectRoot . '/tools/assets/entities.json'), true);
        }

        return $this->entityData;
    }

    public function generateAll(): void
    {
    }

    public function generateModelClass(): void
    {
        $entityData = $this->entityData[$this->entity->name];

        $template = $this->twig->load('Model.twig');
        echo $template->render([
            'namespace' => $this->entity->getNamespace(ClassType::MODEL),
            'classname' => $this->entity->getBaseClassName(ClassType::MODEL),
            'classImports' => [
                Model::class,
            ],
            'entityData' => $entityData,
        ]);
    }
}
