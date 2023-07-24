<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

use Illuminate\Support\Collection;
use Vazaha\Mastodon\Interfaces\ModelInterface;

interface ResultInterface
{
    /**
     * @return null|array<int, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    public function getModels(): ?array;

    public function getModel(): ?ModelInterface;

    public function getCount(): int;

    /**
     * @return null|array<int|string, mixed[]>
     */
    public function getDecodedBody(): ?array;
}
