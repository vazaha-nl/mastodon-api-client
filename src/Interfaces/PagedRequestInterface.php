<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

interface PagedRequestInterface extends RequestInterface
{
    /**
     * @return array<string, string>
     */
    public function getPagingParams(): array;

    /**
     * @param array<int|string,string> $params
     */
    public function setPagingParams(array $params): static;

    public function setMaxId(string $maxId): static;

    public function setMinId(string $minId): static;

    public function setSinceId(string $sinceId): static;

    public function setLimit(string $limit): static;
}
