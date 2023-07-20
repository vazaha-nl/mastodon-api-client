<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Contracts;

use Vazaha\Mastodon\ApiClient;

interface ModelContract
{
    public function getApiClient(): ApiClient;

    /**
     * @param array<string, mixed> $array
     */
    public function fillFromArray(array $array): self;

    /**
     * @return array<string, mixed> *
     */
    public function toArray(): array;

    public function setBaseUri(string $baseUri): self;

    public function getBaseUri(): string;
}
