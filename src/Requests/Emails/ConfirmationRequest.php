<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Emails;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Resend confirmation email.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/emails/#confirmation
 */
final class ConfirmationRequest extends Request implements RequestInterface
{
    /**
     * @param ?string $email if provided, updates the unconfirmed user's email before resending the confirmation email
     *
     * @see https://docs.joinmastodon.org/methods/emails/#confirmation
     */
    public function __construct(
        public ?string $email = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/emails/confirmations';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'email' => $this->email,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
