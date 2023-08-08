<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Check relationships to other accounts.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\RelationshipResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#relationships
 */
final class RelationshipsRequest extends \Vazaha\Mastodon\Requests\RelationshipRequest implements RequestInterface
{
    public function __construct(
        /**
         * Check relationships for the provided account IDs.
         *
         * @var null|mixed[] $id
         */
        public ?array $id = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/accounts/relationships';
    }

    public function getQueryParams(): array
    {
        return [
            'id' => $this->id,
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
