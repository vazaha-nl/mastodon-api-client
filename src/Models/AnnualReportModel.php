<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a summary of a user&#039;s activity during a given year.
 *
 * @see https://docs.joinmastodon.org/entities/AnnualReport/
 */
class AnnualReportModel extends Model
{
    /**
     * The year this report is from.
     */
    public int $year;

    /**
     * The raw data contained in the report. The schema of that data is dependent
     * on the value of `schema_version`.
     *
     * @var array<array-key, mixed>
     */
    public array $data;

    /**
     * The schema version of the report, defines how to interpret `data`.
     */
    public int $schema_version;

    /**
     * An optional link to a shareable version of the report.
     */
    public ?string $share_url = null;

    /**
     * The account ID the report is about.
     */
    public string $account_id;
}
