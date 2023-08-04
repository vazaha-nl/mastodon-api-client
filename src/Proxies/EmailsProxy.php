<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Requests\Emails\ConfirmationRequest;

class EmailsProxy extends Proxy
{
    /**
     * Resend confirmation email.
     */
    public function confirmation(
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new ConfirmationRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
