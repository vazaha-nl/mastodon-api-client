<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * @see https://link.to.docs
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
    public Carbon $updated_at;
}
