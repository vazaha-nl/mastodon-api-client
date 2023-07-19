<?php

namespace Vazaha\Mastodon\Responses;

class PagingLinks
{
    /**
     * @var array<string, string> $links
     */
    protected array $links;

    public function __construct(
        protected ?string $contents = null
    ) {
        $this->parseContents();
    }

    /**
     * @return array<int|string,string>
     */
    public function getNextQueryParams(): array
    {
        $url = $this->getNextUrl();

        return $this->getQueryParams($url);
    }

    /**
     * @return array<int|string,string>
     */
    public function getPreviousQueryParams(): array
    {
        return $this->getQueryParams($this->getPreviousUrl());
    }

    public function getNextUrl(): ?string
    {
        return $this->links['next'] ?? null;
    }

    public function getPreviousUrl(): ?string
    {
        return $this->links['prev'] ?? null;
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

            if (count($parts) !== 2) {
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

        $this->links = $links;
    }

    /**
     * @param null|string $url
     * @return array<int|string, string>
     */
    protected function getQueryParams(?string $url = null): array
    {
        if (empty($url)) {
            return [];
        }

        $query = parse_url($url, PHP_URL_QUERY);

        if (!is_string($query)) {
        	return [];
        }

        parse_str($query, $params);

        return array_filter($params, fn ($value) => is_string($value));
    }
}
