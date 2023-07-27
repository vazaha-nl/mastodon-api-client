<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

use Psr\Http\Message\ResponseInterface;

interface ResultInterface
{
    public function getHttpResponse(): ResponseInterface;

    /**
     * @return array<int, \Vazaha\Mastodon\Interfaces\ModelInterface>
     */
    public function getModels(): array;

    public function getModel(): ?ModelInterface;

    public function getCount(): int;

    /**
     * @return null|array<int|string, mixed[]>
     */
    public function getDecodedBody(): ?array;

    public function getNextResult(): ?self;

    public function getPreviousResult(): ?self;
}
