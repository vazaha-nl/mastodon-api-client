<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

interface ModelInterface
{
    /**
     * @param array<string, mixed> $array
     */
    public static function fromArray(array $array): static;

    /**
     * @return array<string, mixed> *
     */
    public function toArray(): array;
}
