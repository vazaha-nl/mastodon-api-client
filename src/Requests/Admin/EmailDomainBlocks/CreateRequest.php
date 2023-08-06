<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\EmailDomainBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Block an email domain from signups.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult>
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\Admin\EmailDomainBlockRequest implements RequestInterface
{
    public function __construct(
        /**
         * The domain to block federation with.
         */
        public string $domain,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/email_domain_blocks';
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
        return HttpMethod::POST;
    }
}
