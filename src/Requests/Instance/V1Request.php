<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Instance;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\V1\InstanceResult;

/**
 * View server information (v1).
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\V1\InstanceResult>
 *
 * @see https://docs.joinmastodon.org/methods/instance/#v1
 *
 * @deprecated
 */
final class V1Request extends Request implements RequestInterface
{
    /**
     * @see https://docs.joinmastodon.org/methods/instance/#v1
     *
     * @deprecated
     */
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/instance';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return InstanceResult::class;
    }
}
