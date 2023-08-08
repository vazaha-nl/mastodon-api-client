<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Oembed;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Get OEmbed info as JSON.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/oembed/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\EmptyOrUnknownRequest implements RequestInterface
{
    /**
     * @param string $url       URL of a status
     * @param ?int   $maxwidth  Width of the iframe. Defaults to 400
     * @param ?int   $maxheight Height of the iframe. Defaults to null
     */
    public function __construct(
        public string $url,
        public ?int $maxwidth = null,
        public ?int $maxheight = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/oembed';
    }

    public function getQueryParams(): array
    {
        return [
            'url' => $this->url,
            'maxwidth' => $this->maxwidth,
            'maxheight' => $this->maxheight,
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
