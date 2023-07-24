<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

class PagingLinks
{
    protected ?string $previousUrl;

    protected ?string $nextUrl;

    public function __construct(
        protected ?string $contents = null,
    ) {
        $this->parseContents();
    }

    /**
     * @return null|array<int|string,string>
     */
    public function getNextQueryParams(): ?array
    {
        return $this->getQueryParams($this->getNextUrl());
    }

    /**
     * @return null|array<int|string,string>
     */
    public function getPreviousQueryParams(): ?array
    {
        return $this->getQueryParams($this->getPreviousUrl());
    }

    public function getNextUrl(): ?string
    {
        return $this->nextUrl;
    }

    public function getPreviousUrl(): ?string
    {
        return $this->previousUrl;
    }

    protected function parseContents(): void
    {
        if (empty($this->contents)) {
            return;
        }

        $linkElements = explode(', ', $this->contents);

        $links = [];

        foreach ($linkElements as $linkElement) {
            $parts = explode('; ', $linkElement);

            if (count($parts) < 2) {
                continue;
            }

            [$urlPart, $relPart] = $parts;

            if (empty($urlPart) || empty($relPart)) {
                continue;
            }

            if (preg_match('/^\<(.*)\>$/', $urlPart, $matches)) {
                $url = $matches[1];
            }

            if (preg_match('/^rel="(.*)"$/', $relPart, $matches)) {
                $rel = $matches[1];
            }

            if (isset($url, $rel)) {
                $links[$rel] = $url;
            }
        }

        $this->previousUrl = $links['prev'] ?? null;
        $this->nextUrl = $links['next'] ?? null;
    }

    /**
     * @return null|array<int|string, string>
     */
    protected function getQueryParams(?string $url = null): ?array
    {
        if (empty($url)) {
            return null;
        }

        $query = parse_url($url, \PHP_URL_QUERY);

        if (!is_string($query)) {
            return null;
        }

        parse_str($query, $params);

        return array_filter($params, static fn ($value) => is_string($value));
    }
}
