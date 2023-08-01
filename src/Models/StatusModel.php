<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;
use Vazaha\Mastodon\Collections\CustomEmojiCollection;
use Vazaha\Mastodon\Collections\FilterResultCollection;
use Vazaha\Mastodon\Collections\MediaAttachmentCollection;
use Vazaha\Mastodon\Collections\Status\MentionCollection;
use Vazaha\Mastodon\Collections\Status\TagCollection;

/**
 * Represents a status posted by an account.
 */
class StatusModel extends Model
{
    /**
     * ID of the status in the database.
     */
    public string $id;

    /**
     * URI of the status used for federation.
     */
    public string $uri;

    /**
     * The date when this status was created.
     */
    public Carbon $created_at;

    /**
     * The account that authored this status.
     */
    public AccountModel $account;

    /**
     * HTML-encoded status content.
     */
    public string $content;

    /**
     * Visibility of this status.
     */
    public string $visibility;

    /**
     * Is this status marked as sensitive content?
     */
    public bool $sensitive;

    /**
     * Subject or summary line, below which status content is collapsed until
     * expanded.
     */
    public string $spoiler_text;

    /**
     * Media that is attached to this status.
     */
    public MediaAttachmentCollection $media_attachments;

    /**
     * The application used to post this status.
     *
     * @var mixed[]
     */
    public ?array $application = null;

    /**
     * Mentions of users within the status content.
     */
    public MentionCollection $mentions;

    /**
     * Hashtags used within the status content.
     */
    public TagCollection $tags;

    /**
     * Custom emoji to be used when rendering status content.
     */
    public CustomEmojiCollection $emojis;

    /**
     * How many boosts this status has received.
     */
    public int $reblogs_count;

    /**
     * How many favourites this status has received.
     */
    public int $favourites_count;

    /**
     * How many replies this status has received.
     */
    public int $replies_count;

    /**
     * A link to the status&#039;s HTML representation.
     */
    public ?string $url = null;

    /**
     * ID of the status being replied to.
     */
    public ?string $in_reply_to_id = null;

    /**
     * ID of the account that authored the status being replied to.
     */
    public ?string $in_reply_to_account_id = null;

    /**
     * The status being reblogged.
     */
    public ?StatusModel $reblog = null;

    /**
     * The poll attached to the status.
     */
    public ?PollModel $poll = null;

    /**
     * Preview card for links included within status content.
     */
    public ?PreviewCardModel $card = null;

    /**
     * Primary language of this status.
     */
    public ?string $language = null;

    /**
     * Plain-text source of a status. Returned instead of `content` when status is
     * deleted, so the user may redraft from the source text without the client
     * having to reverse-engineer the original text from the HTML content.
     */
    public ?string $text = null;

    /**
     * Timestamp of when the status was last edited.
     */
    public ?Carbon $edited_at = null;

    /**
     * If the current token has an authorized user: Have you favourited this
     * status?
     */
    public ?bool $favourited = null;

    /**
     * If the current token has an authorized user: Have you boosted this status?
     */
    public ?bool $reblogged = null;

    /**
     * If the current token has an authorized user: Have you muted notifications
     * for this status&#039;s conversation?
     */
    public ?bool $muted = null;

    /**
     * If the current token has an authorized user: Have you bookmarked this
     * status?
     */
    public ?bool $bookmarked = null;

    /**
     * If the current token has an authorized user: Have you pinned this status?
     * Only appears if the status is pinnable.
     */
    public ?bool $pinned = null;

    /**
     * If the current token has an authorized user: The filter and keywords that
     * matched this status.
     */
    public ?FilterResultCollection $filtered = null;
}
