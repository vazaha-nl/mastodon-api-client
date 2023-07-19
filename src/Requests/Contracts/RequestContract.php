<?php

namespace Vazaha\Mastodon\Requests\Contracts;

use Psr\Http\Message\UriInterface;

interface RequestContract
{
    public function getMethod(): string;

    public function getEndpoint(): string;

    public function getUri(): UriInterface;

    /**
     * @return array<string, string>
     */
    public function getQuery(): array;

    /**
     * @return mixed[]|null
     */
    public function getBody(): ?array;

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array;
}