<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\RuleCollection;
use Vazaha\Mastodon\Collections\StatusCollection;

/**
 * Admin-level information about a filed report.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_Report/
 */
class ReportModel extends Model
{
    /**
     * The ID of the report in the database.
     */
    public string $id;

    /**
     * Whether an action was taken to resolve this report.
     */
    public bool $action_taken;

    /**
     * When an action was taken, if this report is currently resolved.
     */
    public ?DateTimeInterface $action_taken_at = null;

    /**
     * The category under which the report is classified.
     */
    public string $category;

    /**
     * An optional reason for reporting.
     */
    public ?string $comment = null;

    /**
     * Whether a report was forwarded to a remote instance.
     */
    public bool $forwarded;

    /**
     * The time the report was filed.
     */
    public DateTimeInterface $created_at;

    /**
     * The time of last action on this report.
     */
    public DateTimeInterface $updated_at;

    /**
     * The account which filed the report.
     */
    public AccountModel $account;

    /**
     * The account being reported.
     */
    public AccountModel $target_account;

    /**
     * The account of the moderator assigned to this report.
     */
    public ?AccountModel $assigned_account = null;

    /**
     * The account of the moderator who handled the report.
     */
    public ?AccountModel $action_taken_by_account = null;

    /**
     * Statuses attached to the report, for context.
     */
    public StatusCollection $statuses;

    /**
     * Rules attached to the report, for context.
     */
    public RuleCollection $rules;
}
