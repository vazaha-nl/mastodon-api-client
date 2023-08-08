<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a status ID that, if matched, should cause the filter action to be taken.
 *
 * @see https://docs.joinmastodon.org/entities/FilterStatus/
 */
class FilterStatusModel extends Model
{
    /**
     * The ID of the FilterStatus in the database.
     */
    public string $id;

    /**
     * The ID of the Status that will be filtered.
     */
    public string $status_id;
}
