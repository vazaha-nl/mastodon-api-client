<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Requests\Emails\ConfirmationRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class EmailsProxy extends Proxy
{
    /**
     * Resend confirmation email.
     *
     * @param ?string $email if provided, updates the unconfirmed user's email before resending the confirmation email
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/emails/#confirmation
     */
    public function confirmation(
        ?string $email = null,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new ConfirmationRequest(
                $email,
            ));

        return $models;
    }
}
