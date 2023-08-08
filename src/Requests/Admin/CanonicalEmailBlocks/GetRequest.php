<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * List all canonical email blocks.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlockRequest implements RequestInterface
{
    public function __construct(
        /**
         * Maximum number of results to return. Defaults to 100 blocks. Max 200
         * blocks.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/canonical_email_blocks';
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
}
