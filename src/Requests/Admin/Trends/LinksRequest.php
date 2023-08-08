<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Trends;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View trending links.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Trends\LinkResult>
 *
 * @see https://docs.joinmastodon.org/methods/trends/#links
 */
final class LinksRequest extends \Vazaha\Mastodon\Requests\Trends\LinkRequest implements RequestInterface
{
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/trends/links';
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
}
