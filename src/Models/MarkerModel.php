<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use DateTimeInterface;

/**
 * Represents the last read position within a user&#039;s timelines.
 */
class MarkerModel extends Model
{
    /**
     * The ID of the most recently viewed entity.
     */
    public string $last_read_id;

    /**
     * An incrementing counter, used for locking to prevent write conflicts.
     */
    public int $version;

    /**
     * The timestamp of when the marker was set.
     */
    public DateTimeInterface $updated_at;
}
