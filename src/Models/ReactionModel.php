<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents an emoji reaction to an Announcement.
 *
 * @see https://docs.joinmastodon.org/entities/Reaction/
 */
class ReactionModel extends Model
{
    /**
     * The emoji used for the reaction. Either a unicode emoji, or a custom
     * emoji&#039;s shortcode.
     */
    public string $name;

    /**
     * The total number of users who have added this reaction.
     */
    public int $count;

    /**
     * If there is a currently authorized user: Have you added this reaction?
     */
    public ?bool $me = null;

    /**
     * If the reaction is a custom emoji: A link to the custom emoji.
     */
    public ?string $url = null;

    /**
     * If the reaction is a custom emoji: A link to a non-animated version of the
     * custom emoji.
     */
    public ?string $static_url = null;
}
