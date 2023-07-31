<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * Represents a retention metric.
 */
class CohortDataModel extends Model
{
    /**
     * The timestamp for the start of the bucket, at midnight.
     */
    public Carbon $date;

    /**
     * The percentage rate of users who registered in the specified `period` and
     * were active for the given `date` bucket.
     */
    public string $rate;

    /**
     * How many users registered in the specified `period` and were active for the
     * given `date` bucket.
     */
    public int $value;
}