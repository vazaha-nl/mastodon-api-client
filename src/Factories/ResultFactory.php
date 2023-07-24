<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Results\Result;

class ResultFactory
{
    /**
     * @template T of \Vazaha\Mastodon\Interfaces\ResultInterface
     * @param \Vazaha\Mastodon\Interfaces\RequestInterface<T> $request
     * @return T
     */
    public function build(
        ApiClient $client,
        RequestInterface $request,
        ResponseInterface $response,
    ): ResultInterface {

        return new Result($client, $request, $response);
    }
}
