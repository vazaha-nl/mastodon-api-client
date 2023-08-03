<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Vazaha\Mastodon\Models\TagModel as ModelsTagModel;

/**
 * Represents a hashtag used within the content of a status.
 */
class TagModel extends ModelsTagModel
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
