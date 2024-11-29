<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Interfaces\ResultInterface;

class ResultFactory
{
    /**
     * @template T of \Vazaha\Mastodon\Abstracts\Result
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
            throw new \LogicException($className . ' is not a subclass of ' . Result::class);
        }

        $result = new $className();
        $result->init($client, $request, $response);

        return $result;
    }
}
