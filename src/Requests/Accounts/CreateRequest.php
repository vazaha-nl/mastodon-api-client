<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Register an account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\TokenResult>
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\TokenRequest implements RequestInterface
{
    public function __construct(
        /**
         * The desired username for the account.
         */
        public string $username,

        /**
         * The email address to be used for login.
         */
        public string $email,

        /**
         * The password to be used for login.
         */
        public string $password,

        /**
         * Whether the user agrees to the local rules, terms, and policies. These
         * should be presented to the user in order to allow them to consent before
         * setting this parameter to TRUE.
         */
        public bool $agreement,

        /**
         * The language of the confirmation email that will be sent.
         */
        public string $locale,

        /**
         * If registrations require manual approval, this text will be reviewed by
         * moderators.
         */
        public ?string $reason = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/accounts';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'agreement' => $this->agreement,
            'locale' => $this->locale,
            'reason' => $this->reason,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
