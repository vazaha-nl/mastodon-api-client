<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\DomainAllows;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * List all allowed domains.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DomainAllowResult>
 *
 * @see https://docs.joinmastodon.org/methods/domain_allows/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\Admin\DomainAllowRequest implements RequestInterface
{
    public function __construct(
        /**
         * Maximum number of results to return. Defaults to 100 allows. Max 200
         * allows.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/domain_allows';
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
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
