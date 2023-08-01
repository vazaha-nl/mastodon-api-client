<?php

declare(strict_types=1);

namespace Tools;

use Tools\Enums\ClassType;
use Twig\Environment;

abstract class ClassTemplate
{
    protected ClassNameRepository $imports;

    /**
     * @var array<\Tools\ClassProperty>
     */
    protected array $properties;

    protected string $template;

    protected Environment $twig;

    public function __construct(
        // TODO replace with ClassName?
        protected Entity $entity,
    ) {
        $projectRoot = dirname(__DIR__, 2);
        $loader = new \Twig\Loader\FilesystemLoader($projectRoot . '/tools/templates');
        $this->twig = new Environment($loader, [
            // 'cache' => $projectRoot . '/var/cache/templates',
            'cache' => false,
        ]);

        $this->imports = new ClassNameRepository($entity->toClassName($this->getClassType()));
    }

    public function render(): string
    {
        $template = $this->twig->load($this->getTemplateName());

        return $template->render($this->getTemplateVars());
    }

    public function write(bool $overwriteIfExists = false): bool
    {
        if (file_exists($this->getTargetPath()) && !$overwriteIfExists) {
            printf('File %s already exists, skipping.', $this->getTargetPath());

            return false;
        }

        $directory = dirname($this->getTargetPath());

        if (!file_exists($directory)) {
            mkdir($directory, 0o755, true);
        }

        return (bool) file_put_contents($this->getTargetPath(), $this->render());
    }

    abstract protected function getTemplateName(): string;

    abstract protected function getTemplateVars(): array;

    protected function getTargetPath(): string
    {
        return $this->entity->getPath($this->getClassType());
    }

    abstract protected function getClassType(): ClassType;
}
