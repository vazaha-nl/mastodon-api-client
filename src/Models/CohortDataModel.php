<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a retention metric.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_Cohort/#CohortData
 */
class CohortDataModel extends Model
{
    /**
     * The timestamp for the start of the bucket, at midnight.
     */
    public \DateTimeInterface $date;

    /**
     * The percentage rate of users who registered in the specified `period` and
     * were active for the given `date` bucket.
     */
    public float $rate;

    /**
     * How many users registered in the specified `period` and were active for the
     * given `date` bucket.
     */
    public int $value;
}
