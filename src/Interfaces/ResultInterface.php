<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

use Illuminate\Support\Collection;
use Vazaha\Mastodon\Interfaces\ModelInterface;

interface ResultInterface
{
    /**
     * @return \Illuminate\Support\Collection<int, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    public function getModels(): Collection;

    public function getModel(): ?ModelInterface;

    public function getCount(): int;

    /**
     * @return array<int|string, mixed[]>
     */
    public function getResults(): array;
}
