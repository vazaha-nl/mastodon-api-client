<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\UriInterface;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;

abstract class Request implements RequestContract
{
    protected string $apiVersion = 'v1';

    public function getUri(): UriInterface
    {
        return Uri::withQueryValues(
            new Uri(
                $this->getEndpoint(),
            ),
            $this->getQueryParams(),
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array
    {
        return array_filter([
            'form_params' => $this->getFormParams(),
        ]);
    }
}
