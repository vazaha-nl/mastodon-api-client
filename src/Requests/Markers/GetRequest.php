<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Markers;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\MarkerResult;

/**
 * Get saved timeline positions.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\MarkerResult>
 *
 * @see https://docs.joinmastodon.org/methods/markers/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param null|list<string> $timeline Specify the timeline(s) for which markers should be fetched. Possible values: `home`, `notifications`. If not provided, an empty object will be returned.
     */
    public function __construct(
        public ?array $timeline = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/markers';
    }

    public function getQueryParams(): array
    {
        return [
            'timeline' => $this->timeline,
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
        return MarkerResult::class;
    }
}
