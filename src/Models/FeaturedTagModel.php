<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a hashtag that is featured on an account profile.
 *
 * @see https://docs.joinmastodon.org/entities/FeaturedTag/
 */
class FeaturedTagModel extends Model
{
    /**
     * The ID of the featured tag.
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
     * The date of the last authored status containing this hashtag.
     */
    public \DateTimeInterface $last_status_at;
}
