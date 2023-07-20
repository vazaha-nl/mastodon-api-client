<?php

namespace Vazaha\Mastodon\Requests\Contracts;

interface PagedRequestContract extends RequestContract
{
    /**
     * @return array<string, string>
     */
    public function getPagingParams(): array;

    /**
     * @param array<int|string,string> $params
     * @return \Vazaha\Mastodon\Requests\Contracts\PagedRequestContract
     */
    public function setPagingParams(array $params): self;

    public function setMaxId(string $maxId): self;

    public function setMinId(string $minId): self;

    public function setSinceId(string $sinceId): self;

    public function setLimit(string $limit): self;
}
