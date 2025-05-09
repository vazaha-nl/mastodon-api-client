<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\CustomEmojiCollection;
use Vazaha\Mastodon\Collections\MediaAttachmentCollection;

/**
 * Represents a revision of a status that has been edited.
 *
 * @see https://docs.joinmastodon.org/entities/StatusEdit/
 */
class StatusEditModel extends Model
{
    /**
     * The content of the status at this revision.
     */
    public string $content;

    /**
     * The content of the subject or content warning at this revision.
     */
    public string $spoiler_text;

    /**
     * Whether the status was marked sensitive at this revision.
     */
    public bool $sensitive;

    /**
     * The timestamp of when the revision was published.
     */
    public \DateTimeInterface $created_at;

    /**
     * The account that published this revision.
     */
    public AccountModel $account;

    /**
     * The current state of the poll options at this revision. Note that edits
     * changing the poll options will be collapsed together into one edit, since
     * this action resets the poll.
     *
     * @var null|list<mixed>
     */
    public ?array $poll = null;

    /**
     * The current state of the poll options at this revision. Note that edits
     * changing the poll options will be collapsed together into one edit, since
     * this action resets the poll.
     */
    public MediaAttachmentCollection $media_attachments;

    /**
     * Any custom emoji that are used in the current revision.
     */
    public CustomEmojiCollection $emojis;
}
