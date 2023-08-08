<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Endorsements;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View currently featured profiles.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/endorsements/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\AccountRequest implements RequestInterface
{
    public function __construct(
        /**
         * Maximum number of results to return. Defaults to 40 accounts. Max 80
         * accounts.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/endorsements';
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
