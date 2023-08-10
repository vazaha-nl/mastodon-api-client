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
 * Block an IP address range from signing up.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\IpBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/ip_blocks/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param string  $severity   The policy to apply to this IP range: `sign_up_requires_approval`, `sign_up_block`, or `no_access`
     * @param ?string $ip         The IP address and prefix to block. Defaults to `0.0.0.0/32`
     * @param ?string $comment    the reason for this IP block
     * @param ?int    $expires_in the number of seconds in which this IP block will expire
     */
    public function __construct(
        public string $severity,
        public ?string $ip = null,
        public ?string $comment = null,
        public ?int $expires_in = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/ip_blocks';
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
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return IpBlockResult::class;
    }
}
