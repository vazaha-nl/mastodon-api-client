<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;

abstract class Request implements RequestContract
{
    protected string $apiVersion = 'v1';
    protected string $method = 'GET';

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUri(): UriInterface
    {
        return Uri::withQueryValues(
            new Uri(
                sprintf(
                    '/api/%s/%s',
                    $this->apiVersion,
                    $this->getEndpoint(),
                ),
            ),
            $this->getQueryParams(),
        );
    }

    /**
     * @return array<string, string>
     */
    public function getQueryParams(): array
    {
        return [];
    }

    /**
     * @return array<string, null|string>
     */
    public function getFormParams(): array
    {
        return [];
    }

    /**
     * @return null|mixed[]
     */
    // TODO wat nou null? is deze uberhaupt nodig? wordt er json gepost?
    public function getBody(): ?array
    {
        return null;
    }

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array
    {
        return array_filter([
            'json' => $this->getBody(),
            'form_params' => $this->getFormParams(),
        ]);
    }
}
