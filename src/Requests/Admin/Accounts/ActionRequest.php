<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Perform an action against an account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#action
 */
final class ActionRequest extends \Vazaha\Mastodon\Requests\EmptyOrUnknownRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Account in the database.
         */
        public string $id,

        /**
         * The type of action to be taken: `none`, `sensitive`, `disable`, `silence`,
         * or `suspend`.
         */
        public string $type,

        /**
         * The ID of an associated report that caused this action to be taken.
         */
        public ?string $report_id = null,

        /**
         * The ID of a preset warning.
         */
        public ?string $warning_preset_id = null,

        /**
         * Additional clarification for why this action was taken.
         */
        public ?string $text = null,

        /**
         * Should an email be sent to the user with the above information?
         */
        public ?bool $send_email_notification = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/admin/accounts/%s/action', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'type' => $this->type,
            'report_id' => $this->report_id,
            'warning_preset_id' => $this->warning_preset_id,
            'text' => $this->text,
            'send_email_notification' => $this->send_email_notification,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
