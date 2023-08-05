<?php

declare(strict_types=1);

namespace Tools\Traits;

trait LoadsMethodSpecs
{
    protected array $methodSpecs;

    public function loadMethodSpecs(): array
    {
        $projectRoot = dirname(__DIR__, 3);

        if (!isset($this->methodSpecs)) {
            $this->methodSpecs = json_decode(file_get_contents($projectRoot . '/tools/assets/methods.json'), true);
        }

        return $this->methodSpecs;
    }

    public function getMethodSpecs(): array
    {
        $this->loadMethodSpecs();

        return $this->methodSpecs;
    }
}
