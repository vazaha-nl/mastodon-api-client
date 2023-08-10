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
 * Follow account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\RelationshipResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#follow
 */
final class FollowRequest extends Request implements RequestInterface
{
    /**
     * @param string             $id        the ID of the Account in the database
     * @param ?bool              $reblogs   receive this account's reblogs in home timeline? Defaults to true
     * @param ?bool              $notify    receive notifications when this account posts a status? Defaults to false
     * @param null|array<string> $languages Filter received statuses for these languages. If not provided, you will receive this account's posts in all languages.
     */
    public function __construct(
        public string $id,
        public ?bool $reblogs = null,
        public ?bool $notify = null,
        public ?array $languages = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s/follow', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'reblogs' => $this->reblogs,
            'notify' => $this->notify,
            'languages' => $this->languages,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return RelationshipResult::class;
    }
}
