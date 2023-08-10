<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult;

/**
 * Block a canonical email.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/canonical_email_blocks/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param string  $email                The email to canonicalize, hash, and block. If this parameter is provided, `canonical_email_hash` will be ignored.
     * @param ?string $canonical_email_hash The hash to test against. If `email` is not provided, this parameter is required.
     */
    public function __construct(
        public string $email,
        public ?string $canonical_email_hash = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/canonical_email_blocks';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'email' => $this->email,
            'canonical_email_hash' => $this->canonical_email_hash,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return CanonicalEmailBlockResult::class;
    }
}
