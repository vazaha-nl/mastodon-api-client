<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\IdentityProofResult;

/**
 * Identity proofs.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\IdentityProofResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#identity_proofs
 *
 * @deprecated
 */
final class IdentityProofsRequest extends Request implements RequestInterface
{
    /**
     * @see https://docs.joinmastodon.org/methods/accounts/#identity_proofs
     *
     * @deprecated
     *
     * @param string $id the ID of the account
     */
    public function __construct(
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s/identity_proofs', urlencode($this->id));
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
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return IdentityProofResult::class;
    }
}
