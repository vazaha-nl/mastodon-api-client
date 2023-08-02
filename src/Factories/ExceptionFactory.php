<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Factories;

use GuzzleHttp\Exception\RequestException;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\ApiErrorException;
use Vazaha\Mastodon\Exceptions\BadRequestException;
use Vazaha\Mastodon\Exceptions\ForbiddenException;
use Vazaha\Mastodon\Exceptions\NotFoundException;
use Vazaha\Mastodon\Exceptions\TooManyRequestsException;
use Vazaha\Mastodon\Exceptions\UnauthorizedException;
use Vazaha\Mastodon\Exceptions\UnprocessableEntityException;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ErrorResult;

class ExceptionFactory
{
    public function buildApiErrorException(
        RequestException $e,
        ApiClient $apiClient,
        RequestInterface $request,
    ): ApiErrorException {
        $response = $e->getResponse();

        if ($response === null) {
            return new ApiErrorException($e->getMessage(), $e->getCode(), $e);
        }

        $result = (new ResultFactory())->build(ErrorResult::class, $apiClient, $request, $response);
        $error = $result->getModel();

        switch ($response->getStatusCode()) {
            case 400:
                return new BadRequestException($e->getMessage(), $response->getStatusCode(), $e, $error);

            case 401:
                return new UnauthorizedException($e->getMessage(), $response->getStatusCode(), $e, $error);

            case 403:
                return new ForbiddenException($e->getMessage(), $response->getStatusCode(), $e, $error);

            case 404:
                return new NotFoundException($e->getMessage(), $response->getStatusCode(), $e, $error);

            case 422:
                return new UnprocessableEntityException($e->getMessage(), $response->getStatusCode(), $e, $error);

            case 429:
                return new TooManyRequestsException($e->getMessage(), $response->getStatusCode(), $e, $error);

            default:
                return new ApiErrorException($e->getMessage(), $response->getStatusCode(), $e, $error);
        }
    }
}
