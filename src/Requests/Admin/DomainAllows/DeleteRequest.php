<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\DomainAllows;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Delete an allowed domain.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DomainAllowResult>
 *
 * @see https://docs.joinmastodon.org/methods/domain_allows/#delete
 */
final class DeleteRequest extends \Vazaha\Mastodon\Requests\Admin\DomainAllowRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the DomainAllow in the database.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/admin/domain_allows/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::DELETE;
    }
}
