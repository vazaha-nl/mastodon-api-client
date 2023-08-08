<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Block a canonical email.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlockRequest implements RequestInterface
{
    public function __construct(
        /**
         * The email to canonicalize, hash, and block. If this parameter is provided,
         * `canonical_email_hash` will be ignored.
         */
        public string $email,

        /**
         * The hash to test against. If `email` is not provided, this parameter is
         * required.
         */
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
}
