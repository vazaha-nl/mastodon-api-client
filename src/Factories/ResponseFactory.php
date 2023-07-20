<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Requests\Contracts\PagedRequestContract;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;
use Vazaha\Mastodon\Responses\Contracts\PagedResponseContract;
use Vazaha\Mastodon\Responses\Contracts\ResponseContract;
use Vazaha\Mastodon\Responses\PagedResponse;
use Vazaha\Mastodon\Responses\Response;

class ResponseFactory
{
    public function create(ApiClient $client, RequestContract $request, ResponseInterface $response): PagedResponseContract|ResponseContract
    {
        if ($request instanceof PagedRequestContract) {
            return new PagedResponse($client, $request, $response);
        }

        return new Response($client, $request, $response);
    }
}
