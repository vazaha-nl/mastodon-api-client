<?php

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Responses\PagedResponse;

abstract class PagedRequest extends Request
{
    protected string $maxId;

    protected string $minId;

    protected string $sinceId;

    protected string $limit;

    protected string $responseClass = PagedResponse::class;

    public function getQuery(): array
    {
        return array_filter([
            'max_id' => $this->maxId ?? null,
            'min_id' => $this->minId ?? null,
            'since_id' => $this->sinceId ?? null,
            'limit' => $this->limit ?? null,
        ]);
    }

    public function setPagingParams(array $params): self
    {
        if (isset($params['max_id'])) {
            $this->setMaxId($params['max_id']);
        }

        if (isset($params['min_id'])) {
            $this->setMinId($params['min_id']);
        }

        if (isset($params['since_id'])) {
            $this->setSinceId($params['since_id']);
        }

        if (isset($params['limit'])) {
            $this->setLimit($params['limit']);
        }

        return $this;
    }

    public function setMaxId(string $maxId): self
    {
        $this->maxId = $maxId;

        return $this;
    }

    public function setMinId(string $minId): self
    {
        $this->minId = $minId;

        return $this;
    }

    public function setSinceId(string $sinceId): self
    {
        $this->sinceId = $sinceId;

        return $this;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }
}
