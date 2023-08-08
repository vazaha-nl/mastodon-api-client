<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Verify account credentials.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\CredentialAccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#verify_credentials
 */
final class VerifyCredentialsRequest extends \Vazaha\Mastodon\Requests\CredentialAccountRequest implements RequestInterface
{
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/accounts/verify_credentials';
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
}
