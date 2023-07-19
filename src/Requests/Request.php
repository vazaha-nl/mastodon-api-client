<?php

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
            		$this->getEndpoint()
            	)
            ),
            $this->getQuery()
        );
    }

    /**
     * @return array<string, string>
     */
    public function getQuery(): array
    {
        return [];
    }

    /**
     * @return mixed[]|null
     */
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
        ]);
    }
}
