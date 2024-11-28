<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Lists;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Remove accounts from list.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/lists/#accounts-remove
 */
final class AccountsRemoveRequest extends Request implements RequestInterface
{
    /**
     * @param string       $id          the ID of the List in the database
     * @param list<string> $account_ids the accounts that should be removed from the list
     */
    public function __construct(
        public string $id,
        public array $account_ids = [],
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/lists/%s/accounts', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'account_ids' => $this->account_ids,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::DELETE;
    }

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
