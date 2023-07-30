<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

use Illuminate\Support\Collection;
use Psr\Http\Message\ResponseInterface;

interface ResultInterface
{
    /**
     * @return class-string<\Vazaha\Mastodon\Models\Model>
     */
    public function getModelClass(): string;

    public function getHttpResponse(): ResponseInterface;

    /**
     * @return \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    public function getModels(): Collection;

    public function getModel(): ?ModelInterface;

    public function getCount(): int;

    /**
     * @return null|array<int|string, mixed[]>
     */
    public function getDecodedBody(): ?array;

    public function getNextResult(): ?self;

    public function getPreviousResult(): ?self;
}
