<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\ModelInterface;

/**
 * @template TDerivative of \Vazaha\Mastodon\Interfaces\ResultInterface
 */
interface RequestInterface
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

    /**
     * @return class-string<\Vazaha\Mastodon\Models\Model>
     */
    public function getModelClass(): string;

    /**
     * @return class-string<\Vazaha\Mastodon\Results\Result>
     */
    public function getResultClass(): string;

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
