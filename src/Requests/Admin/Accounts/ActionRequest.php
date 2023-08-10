<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Accounts;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Perform an action against an account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/accounts/#action
 */
final class ActionRequest extends Request implements RequestInterface
{
    /**
     * @param string  $id                      the ID of the Account in the database
     * @param string  $type                    the type of action to be taken: `none`, `sensitive`, `disable`, `silence`, or `suspend`
     * @param ?string $report_id               the ID of an associated report that caused this action to be taken
     * @param ?string $warning_preset_id       the ID of a preset warning
     * @param ?string $text                    additional clarification for why this action was taken
     * @param ?bool   $send_email_notification Should an email be sent to the user with the above information?
     */
    public function __construct(
        public string $id,
        public string $type,
        public ?string $report_id = null,
        public ?string $warning_preset_id = null,
        public ?string $text = null,
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

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
