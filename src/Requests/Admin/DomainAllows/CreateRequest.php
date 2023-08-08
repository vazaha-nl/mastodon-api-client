<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\DomainAllows;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Allow a domain to federate.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DomainAllowResult>
 *
 * @see https://docs.joinmastodon.org/methods/domain_allows/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\Admin\DomainAllowRequest implements RequestInterface
{
    public function __construct(
        /**
         * The domain to allow federation with.
         */
        public string $domain,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/domain_allows';
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
