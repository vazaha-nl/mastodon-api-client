<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Follow account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\RelationshipResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#follow
 */
final class FollowRequest extends \Vazaha\Mastodon\Requests\RelationshipRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Account in the database.
         */
        public string $id,

        /**
         * Receive this account&#039;s reblogs in home timeline? Defaults to true.
         */
        public ?bool $reblogs = null,

        /**
         * Receive notifications when this account posts a status? Defaults to false.
         */
        public ?bool $notify = null,

        /**
         * Filter received statuses for these languages. If not provided, you will
         * receive this account&#039;s posts in all languages.
         *
         * @var null|array<string> $languages
         */
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
}
