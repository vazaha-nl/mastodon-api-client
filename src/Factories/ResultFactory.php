<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Interfaces\PagedRequestInterface;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\PagedResultInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Results\PagedResult;
use Vazaha\Mastodon\Results\Result;

class ResultFactory
{
    public function build(
        ApiClient $client,
        RequestInterface $request,
        ResponseInterface $response,
    ): PagedResultInterface|ResultInterface {
        if ($request instanceof PagedRequestInterface) {
            return new PagedResult($client, $request, $response);
        }

        return new Result($client, $request, $response);
    }
}
