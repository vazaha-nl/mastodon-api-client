<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\IpBlocks;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\Admin\IpBlockResult;

/**
 * List all IP blocks.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\IpBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/ip_blocks/#get
 */
final class GetRequest extends Request implements RequestInterface
{
    /**
     * @param ?int $limit Maximum number of results to return. Defaults to 100 blocks. Max 200 blocks.
     */
    public function __construct(
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/ip_blocks';
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
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
        return IpBlockResult::class;
    }
}
