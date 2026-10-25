<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\CredentialAccountResult;

/**
 * Verify account credentials.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\CredentialAccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#verify_credentials
 */
final class VerifyCredentialsRequest extends Request implements RequestInterface
{
    /**
     * @param ?bool $allow_nonfunctional Whether to get account information even if the account is non-functional (such as e.g. not being approved or confirmed), defaults to `false`.
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#verify_credentials
     */
    public function __construct(public ?bool $allow_nonfunctional = null)
    {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/accounts/verify_credentials';
    }

    public function getQueryParams(): array
    {
        return [
            'allow_nonfunctional' => $this->allow_nonfunctional,
        ];
    }

    public function getFormParams(): array
    {
        return [];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return CredentialAccountResult::class;
    }
}
