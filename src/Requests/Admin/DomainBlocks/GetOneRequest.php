<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\DomainBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Get a single blocked domain.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DomainBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/domain_blocks/#get-one
 */
final class GetOneRequest extends \Vazaha\Mastodon\Requests\Admin\DomainBlockRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the DomainBlock in the database.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/admin/domain_blocks/%s', urlencode($this->id));
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
