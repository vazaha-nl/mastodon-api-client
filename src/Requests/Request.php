<?php

namespace Vazaha\Mastodon\Requests;

use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Responses\Response;

abstract class Request
{
	public const API_VERSION = 'v1';

    protected string $method = 'GET';

    protected string $modelClass;

    protected string $responseClass = Response::class;

    public function getMethod(): string
    {
        return $this->method;
    }

    abstract public function getEndpoint(): string;

    public function getUri(): UriInterface
    {
        return Uri::withQueryValues(
            new Uri(
            	sprintf(
            		'/api/%s/%s',
            		self::API_VERSION,
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

    abstract public function getModelClass(): string;

    public function getResponseClass(): string
    {
        return $this->responseClass;
    }
}
