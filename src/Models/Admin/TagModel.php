<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
 */
class TagModel extends Model
{
    /**
     * The ID of the Tag in the database.
     */
    public string $id;

    /**
     * Whether the hashtag has been approved to trend.
     */
    public bool $trendable;

    /**
     * Whether the hashtag has not been disabled from auto-linking.
     */
    public bool $usable;

    /**
     * Whether the hashtag has not been reviewed yet to approve or deny its
     * trending.
     */
    public bool $requires_review;
}
