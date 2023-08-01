<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\DomainBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Unblock a domain.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResponseResult>
 */
final class UnblockRequest extends \Vazaha\Mastodon\Requests\EmptyOrUnknownResponseRequest implements RequestInterface
{
    public function __construct(
        /**
         * Domain to unblock.
         */
        public string $domain,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/domain_blocks';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'domain' => $this->domain,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::DELETE;
    }
}
