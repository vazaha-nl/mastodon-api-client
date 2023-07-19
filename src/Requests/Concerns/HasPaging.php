<?php

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Requests\Contracts\PagedRequestContract;

trait HasPaging
{
    protected string $maxId;

    protected string $minId;

    protected string $sinceId;

    protected string $limit;

    public function getQuery(): array
    {
        return array_filter([
            'max_id' => $this->maxId ?? null,
            'min_id' => $this->minId ?? null,
            'since_id' => $this->sinceId ?? null,
            'limit' => $this->limit ?? null,
        ]);
    }

    /**
     * @param array<int|string,string> $params
     * @return \Vazaha\Mastodon\Requests\Contracts\PagedRequestContract
     */
    public function setPagingParams(array $params): PagedRequestContract
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

    public function setMaxId(string $maxId): PagedRequestContract
    {
        $this->maxId = $maxId;

        return $this;
    }

    public function setMinId(string $minId): PagedRequestContract
    {
        $this->minId = $minId;

        return $this;
    }

    public function setSinceId(string $sinceId): PagedRequestContract
    {
        $this->sinceId = $sinceId;

        return $this;
    }

    public function setLimit(string $limit): PagedRequestContract
    {
        $this->limit = $limit;

        return $this;
    }
}