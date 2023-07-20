<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Contracts;

use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Enums\HttpMethod;

interface RequestContract
{
    public function getHttpMethod(): HttpMethod;

    public function getEndpoint(): string;

    public function getUri(): UriInterface;

    /**
     * @return array<string, string>
     */
    public function getQueryParams(): array;

    /**
     * @return array<string, string>
     */
    public function getFormParams(): array;

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array;
}
