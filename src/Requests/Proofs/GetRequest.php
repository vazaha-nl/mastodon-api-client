<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Proofs;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * (REMOVED) View identity proofs.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/proofs/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\EmptyOrUnknownRequest implements RequestInterface
{
    public function __construct(
        /**
         * The identity provider to be looked up. Currently only supports `keybase`
         * (case-sensitive).
         */
        public ?string $provider = null,

        /**
         * The username on the selected identity provider.
         */
        public ?string $username = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/proofs';
    }

    public function getQueryParams(): array
    {
        return [
            'provider' => $this->provider,
            'username' => $this->username,
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
