<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;
use Vazaha\Mastodon\Collections\Announcement\AccountCollection;
use Vazaha\Mastodon\Collections\Announcement\StatusCollection;
use Vazaha\Mastodon\Collections\CustomEmojiCollection;
use Vazaha\Mastodon\Collections\ReactionCollection;
use Vazaha\Mastodon\Collections\Status\TagCollection;

/**
 * Represents an announcement set by an administrator.
 */
class AnnouncementModel extends Model
{
    /**
     * The ID of the announcement in the database.
     */
    public string $id;

    /**
     * The text of the announcement.
     */
    public string $content;

    /**
     * When the announcement will start.
     */
    public ?Carbon $starts_at = null;

    /**
     * When the announcement will end.
     */
    public ?Carbon $ends_at = null;

    /**
     * Whether the announcement is currently active.
     */
    public bool $published;

    /**
     * Whether the announcement should start and end on dates only instead of
     * datetimes. Will be false if there is no `starts_at` or `ends_at` time.
     */
    public bool $all_day;

    /**
     * When the announcement was published.
     */
    public Carbon $published_at;

    /**
     * When the announcement was last updated.
     */
    public Carbon $updated_at;

    /**
     * Whether the announcement has been read by the current user.
     */
    public ?bool $read = null;

    /**
     * Accounts mentioned in the announcement text.
     */
    public AccountCollection $mentions;

    /**
     * Statuses linked in the announcement text.
     */
    public StatusCollection $statuses;

    /**
     * Tags linked in the announcement text.
     */
    public TagCollection $tags;

    /**
     * Custom emoji used in the announcement text.
     */
    public CustomEmojiCollection $emojis;

    /**
     * Emoji reactions attached to the announcement.
     */
    public ReactionCollection $reactions;
}
