<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Markers;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Save your position in a timeline.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\MarkerResult>
 *
 * @see https://docs.joinmastodon.org/methods/markers/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\MarkerRequest implements RequestInterface
{
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/markers';
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
        return HttpMethod::POST;
    }
}
