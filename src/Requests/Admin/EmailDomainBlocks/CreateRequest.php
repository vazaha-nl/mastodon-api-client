<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\EmailDomainBlocks;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult;

/**
 * Block an email domain from signups.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/email_domain_blocks/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param string $domain the domain to block federation with
     */
    public function __construct(
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

    public function getResultClass(): string
    {
        return EmailDomainBlockResult::class;
    }
}
