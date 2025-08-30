<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Moderation warning against a particular account.
 *
 * @see https://docs.joinmastodon.org/entities/AccountWarning/
 */
class AccountWarningModel extends Model
{
    /**
     * The ID of the account warning.
     */
    public string $id;

    /**
     * Action taken against the account.
     */
    public string $action;

    /**
     * Message from the moderator to the target account.
     */
    public string $text;

    /**
     * List of status IDs that are relevant to the warning. When `action` is
     * `mark_statuses_as_sensitive` or `delete_statuses`, those are the affected
     * statuses. If the action is `delete_statuses` then they have been
     * irrevocably deleted (irrespective of the appeal state), and will be
     * inaccessible to the client.
     *
     * @var null|list<string>
     */
    public ?array $status_ids = null;

    /**
     * Account against which a moderation decision has been taken. If this
     * `AccountWarning` is present in a Notification
     * then this is always the same as the authenticated account that requested
     * the notification.
     */
    public AccountModel $target_account;

    /**
     * Appeal submitted by the target account, if any.
     */
    public ?AppealModel $appeal = null;

    /**
     * When the event took place.
     */
    public \DateTimeInterface $created_at;
}
