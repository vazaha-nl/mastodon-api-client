<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

use Psr\Http\Message\ResponseInterface;

interface ResultInterface
{
    /**
     * @return class-string<\Vazaha\Mastodon\Models\Model>
     */
    public function getModelClass(): string;

    public function getHttpResponse(): ResponseInterface;

    public function getBody(): string;

    /**
     * @return null|array<int|string, mixed[]>
     */
    public function getDecodedBody(): ?array;

    public function getNextPage(): ?self;

    public function getPreviousPage(): ?self;
}
