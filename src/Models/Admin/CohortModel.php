<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Carbon\Carbon;
use Vazaha\Mastodon\Collections\CohortDataCollection;
use Vazaha\Mastodon\Models\Model;

/**
 * Represents a retention metric.
 */
class CohortModel extends Model
{
    /**
     * The timestamp for the start of the period, at midnight.
     */
    public Carbon $period;

    /**
     * The size of the bucket for the returned data.
     */
    public string $frequency;

    /**
     * Retention data for users who registered during the given period.
     */
    public CohortDataCollection $data;
}
