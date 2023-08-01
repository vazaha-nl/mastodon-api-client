<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\UriInterface;

/**
 * @mixin \Vazaha\Mastodon\Requests\Request
 */
trait HasPaging
{
    protected string $maxId;

    protected string $minId;

    protected string $sinceId;

    protected ?int $limit;

    /**
     * @return array<string,int|string>
     */
    public function getPagingParams(): array
    {
        return array_filter([
            'max_id' => $this->maxId ?? null,
            'min_id' => $this->minId ?? null,
            'since_id' => $this->sinceId ?? null,
            'limit' => $this->limit ?? null,
        ]);
    }

    public function getUri(): UriInterface
    {
        $uri = $this->getEndpoint();
        $query = http_build_query(
            array_merge(
                $this->getQueryParams(),
                $this->getPagingParams(),
            ),
        );

        if (!empty($query)) {
            $uri .= '?' . $query;
        }

        return new Uri($uri);
    }

    /**
     * @param array<int|string,int|string> $params
     */
    public function setPagingParams(array $params): static
    {
        if (isset($params['max_id'])) {
            $this->setMaxId((string) $params['max_id']);
        }

        if (isset($params['min_id'])) {
            $this->setMinId((string) $params['min_id']);
        }

        if (isset($params['since_id'])) {
            $this->setSinceId((string) $params['since_id']);
        }

        if (isset($params['limit'])) {
            $this->setLimit((int) $params['limit']);
        }

        return $this;
    }

    public function setMaxId(string $maxId): static
    {
        $this->maxId = $maxId;

        return $this;
    }

    public function setMinId(string $minId): static
    {
        $this->minId = $minId;

        return $this;
    }

    public function setSinceId(string $sinceId): static
    {
        $this->sinceId = $sinceId;

        return $this;
    }

    public function setLimit(?int $limit): static
    {
        $this->limit = $limit;

        return $this;
    }
}
