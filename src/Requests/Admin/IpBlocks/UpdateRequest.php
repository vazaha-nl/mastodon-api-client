<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\IpBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Update a domain block.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\IpBlockResult>
 */
final class UpdateRequest extends \Vazaha\Mastodon\Requests\Admin\IpBlockRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the IpBlock in the database.
         */
        public string $id,

        /**
         * The IP address and prefix to block. Defaults to `0.0.0.0/32`.
         */
        public ?string $ip = null,

        /**
         * The policy to apply to this IP range: `sign_up_requires_approval`,
         * `sign_up_block`, or `no_access`.
         */
        public ?string $severity = null,

        /**
         * The reason for this IP block.
         */
        public ?string $comment = null,

        /**
         * The number of seconds in which this IP block will expire.
         */
        public ?int $expires_in = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/admin/ip_blocks/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'ip' => $this->ip,
            'severity' => $this->severity,
            'comment' => $this->comment,
            'expires_in' => $this->expires_in,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
