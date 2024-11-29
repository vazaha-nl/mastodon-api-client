<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\CustomEmojiCollection;
use Vazaha\Mastodon\Collections\Poll\OptionCollection;

/**
 * Represents a poll attached to a status.
 *
 * @see https://docs.joinmastodon.org/entities/Poll/
 */
class PollModel extends Model
{
    /**
     * The ID of the poll in the database.
     */
    public string $id;

    /**
     * When the poll ends.
     */
    public ?\DateTimeInterface $expires_at = null;

    /**
     * Is the poll currently expired?
     */
    public bool $expired;

    /**
     * Does the poll allow multiple-choice answers?
     */
    public bool $multiple;

    /**
     * How many votes have been received.
     */
    public int $votes_count;

    /**
     * How many unique accounts have voted on a multiple-choice poll.
     */
    public ?int $voters_count = null;

    /**
     * Possible answers for the poll.
     */
    public OptionCollection $options;

    /**
     * Custom emoji to be used for rendering poll options.
     */
    public CustomEmojiCollection $emojis;

    /**
     * When called with a user token, has the authorized user voted?
     */
    public ?bool $voted = null;

    /**
     * When called with a user token, which options has the authorized user
     * chosen? Contains an array of index values for `options`.
     *
     * @var null|list<int>
     */
    public ?array $own_votes = null;
}
