<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * Represents a hashtag that is featured on a profile.
 */
class FeaturedTagModel extends Model
{
    /**
     * The internal ID of the featured tag in the database.
     */
    public string $id;

    /**
     * The name of the hashtag being featured.
     */
    public string $name;

    /**
     * A link to all statuses by a user that contain this hashtag.
     */
    public string $url;

    /**
     * The number of authored statuses containing this hashtag.
     */
    public string $statuses_count;

    /**
     * The timestamp of the last authored status containing this hashtag.
     */
    public Carbon $last_status_at;
}
