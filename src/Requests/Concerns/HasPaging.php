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
    protected ?string $maxId;

    protected ?string $minId;

    protected ?string $sinceId;

    protected ?int $limit;

    /**
     * @return array<string, int|string>
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
        $params = array_merge(
            $this->getQueryParams(),
            $this->getPagingParams()
        );

        $uri = $this->getEndpoint();
        $query = http_build_query(array_filter($params, fn($v) => !is_array($v)), '', '&', PHP_QUERY_RFC3986);

        foreach ($params as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $item) {
                    $query .= '&' . rawurlencode($key . '[]') . '=' . rawurlencode($item);
                }
            }
        }

        $query = ltrim($query, '&');

        if (!empty($query)) {
            $uri .= '?' . $query;
        }

        return new Uri($uri);
    }

    /**
     * @param array<int|string, int|string> $params
     */
    public function setPagingParams(array $params): static
    {
        $this->setMaxId(isset($params['max_id']) ? (string) $params['max_id'] : null);

        $this->setMinId(isset($params['min_id']) ? (string) $params['min_id'] : null);

        $this->setSinceId(isset($params['since_id']) ? (string) $params['since_id'] : null);

        $this->setLimit(isset($params['limit']) ? (int) $params['limit'] : null);

        return $this;
    }

    public function setMaxId(?string $maxId): static
    {
        $this->maxId = $maxId;

        return $this;
    }

    public function setMinId(?string $minId): static
    {
        $this->minId = $minId;

        return $this;
    }

    public function setSinceId(?string $sinceId): static
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
