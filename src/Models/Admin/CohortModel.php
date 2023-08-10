<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\CohortDataCollection;

/**
 * Represents a retention metric.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_Cohort/
 */
class CohortModel extends Model
{
    /**
     * The timestamp for the start of the period, at midnight.
     */
    public DateTimeInterface $period;

    /**
     * The size of the bucket for the returned data.
     */
    public string $frequency;

    /**
     * Retention data for users who registered during the given period.
     */
    public CohortDataCollection $data;
}
