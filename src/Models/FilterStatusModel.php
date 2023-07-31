<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
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
