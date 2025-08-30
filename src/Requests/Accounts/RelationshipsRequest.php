<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\RelationshipResult;

/**
 * Check relationships to other accounts.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\RelationshipResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#relationships
 */
final class RelationshipsRequest extends Request implements RequestInterface
{
    /**
     * @param null|list<string> $id             check relationships for the provided account IDs
     * @param ?bool             $with_suspended whether relationships should be returned for suspended users, defaults to false
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#relationships
     */
    public function __construct(
        public ?array $id = null,
        public ?bool $with_suspended = null,
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
            'with_suspended' => $this->with_suspended,
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

    public function getResultClass(): string
    {
        return RelationshipResult::class;
    }
}
