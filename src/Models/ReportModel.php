<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Reports filed against users and/or statuses, to be taken action on by moderators.
 *
 * @see https://docs.joinmastodon.org/entities/Report/
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
    public ?\DateTimeInterface $action_taken_at = null;

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
    public \DateTimeInterface $created_at;

    /**
     * IDs of statuses that have been attached to this report for additional
     * context.
     *
     * @var null|list<string>
     */
    public ?array $status_ids = null;

    /**
     * IDs of the rules that have been cited as a violation by this report.
     *
     * @var null|list<string>
     */
    public ?array $rule_ids = null;

    /**
     * The account that was reported.
     */
    public AccountModel $target_account;
}
