<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents quantitative data about the server.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_Measure/
 */
class MeasureModel extends Model
{
    /**
     * The unique keystring for the requested measure.
     */
    public string $key;

    /**
     * The units associated with this data item's value, if applicable.
     */
    public ?string $unit = null;

    /**
     * The numeric total associated with the requested measure.
     */
    public string $total;

    /**
     * A human-readable formatted value for this data item.
     */
    public ?string $human_value = null;

    /**
     * The numeric total associated with the requested measure, in the previous
     * period. Previous period is calculated by subtracting the start_at and
     * end_at dates, then offsetting both start and end dates backwards by the
     * length of the time period.
     */
    public ?string $previous_total = null;

    /**
     * The data available for the requested measure, split into daily buckets.
     *
     * @var list<mixed>
     */
    public array $data;
}
