<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Test.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/#test
 */
final class TestRequest extends \Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlockRequest implements RequestInterface
{
    public function __construct(
        /**
         * The email to canonicalize and hash.
         */
        public string $email,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/canonical_email_blocks/test';
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
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
