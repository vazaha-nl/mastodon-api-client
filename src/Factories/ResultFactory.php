<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use LogicException;
use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Results\Result;

class ResultFactory
{
    /**
     * @template T of \Vazaha\Mastodon\Results\Result
     * @template T2 of \Vazaha\Mastodon\Interfaces\ResultInterface
     *
     * @param class-string<T>                                  $className
     * @param \Vazaha\Mastodon\Interfaces\RequestInterface<T2> $request
     *
     * @return T
     */
    public function build(
        string $className,
        ApiClient $client,
        RequestInterface $request,
        ResponseInterface $response,
    ): ResultInterface {
        if (!is_a($className, Result::class, true)) {
            throw new LogicException($className . ' is not a subclass of ' . Result::class);
        }

        return new $className($client, $request, $response);
    }
}
