<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\TokenResult;

/**
 * Register an account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\TokenResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param string  $username  The desired username for the account
     * @param string  $email     The email address to be used for login
     * @param string  $password  The password to be used for login
     * @param bool    $agreement Whether the user agrees to the local rules, terms, and policies. These should be presented to the user in order to allow them to consent before setting this parameter to TRUE.
     * @param string  $locale    the language of the confirmation email that will be sent
     * @param ?string $reason    if registrations require manual approval, this text will be reviewed by moderators
     */
    public function __construct(
        public string $username,
        public string $email,
        public string $password,
        public bool $agreement,
        public string $locale,
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

    public function getResultClass(): string
    {
        return TokenResult::class;
    }
}
