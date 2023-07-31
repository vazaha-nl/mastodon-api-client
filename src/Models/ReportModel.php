<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * Reports filed against users and/or statuses, to be taken action on by moderators.
 */
class ReportModel extends Model
{
    /**
     * The ID of the report in the database.
     */
    public string $id;

    /**
     * Whether an action was taken yet.
     */
    public bool $action_taken;

    /**
     * When an action was taken against the report.
     */
    public ?Carbon $action_taken_at = null;

    /**
     * The generic reason for the report.
     */
    public string $category;

    /**
     * The reason for the report.
     */
    public string $comment;

    /**
     * Whether the report was forwarded to a remote domain.
     */
    public bool $forwarded;

    /**
     * When the report was created.
     */
    public Carbon $created_at;

    /**
     * IDs of statuses that have been attached to this report for additional
     * context.
     */
    public ?string $status_ids = null;

    /**
     * IDs of the rules that have been cited as a violation by this report.
     */
    public ?string $rule_ids = null;

    /**
     * The account that was reported.
     */
    public AccountModel $target_account;
}
