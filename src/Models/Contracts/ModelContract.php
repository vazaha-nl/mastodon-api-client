<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Contracts;

interface ModelContract
{
    /**
     * @param array<string, mixed> $array
     */
    public function fillFromArray(array $array): self;

    /**
     * @return array<string, mixed> *
     */
    public function toArray(): array;
}
