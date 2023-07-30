<?php

declare(strict_types=1);

namespace Tools\Traits;

trait LoadsEntitySpecs
{
    protected array $entitySpecs;

    public function loadEntitySpecs(): array
    {
        $projectRoot = dirname(__DIR__, 3);

        if (!isset($this->entityData)) {
            $this->entitySpecs = json_decode(file_get_contents($projectRoot . '/tools/assets/entities.json'), true);
        }

        return $this->entitySpecs;
    }
}
