<?php

namespace Vazaha\Mastodon\Requests;

use GuzzleHttp\Psr7\Uri;
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

    public function getUri(): Uri
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

    public function getQuery(): array
    {
        return [];
    }

    public function getBody(): ?array
    {
        return null;
    }

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
