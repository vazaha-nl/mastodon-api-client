<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\CustomEmojiCollection;
use Vazaha\Mastodon\Collections\FieldCollection;

/**
 * Represents a user of Mastodon and their associated profile.
 *
 * @see https://docs.joinmastodon.org/entities/Account/
 */
class AccountModel extends Model
{
    /**
     * The account id.
     */
    public string $id;

    /**
     * The username of the account, not including domain.
     */
    public string $username;

    /**
     * The Webfinger account URI. Equal to `username` for local users, or
     * `username@domain` for remote users.
     */
    public string $acct;

    /**
     * The location of the user's profile page.
     */
    public string $url;

    /**
     * The profile's display name.
     */
    public string $display_name;

    /**
     * The profile's bio or description.
     */
    public string $note;

    /**
     * An image icon that is shown next to statuses and in the profile.
     */
    public string $avatar;

    /**
     * A static version of the avatar. Equal to `avatar` if its value is a static
     * image; different if `avatar` is an animated GIF.
     */
    public string $avatar_static;

    /**
     * An image banner that is shown above the profile and in profile cards.
     */
    public string $header;

    /**
     * A static version of the header. Equal to `header` if its value is a static
     * image; different if `header` is an animated GIF.
     */
    public string $header_static;

    /**
     * Whether the account manually approves follow requests.
     */
    public bool $locked;

    /**
     * Additional metadata attached to a profile as name-value pairs.
     */
    public FieldCollection $fields;

    /**
     * Custom emoji entities to be used when rendering the profile.
     */
    public CustomEmojiCollection $emojis;

    /**
     * Indicates that the account may perform automated actions, may not be
     * monitored, or identifies as a robot.
     */
    public bool $bot;

    /**
     * Indicates that the account represents a Group actor.
     */
    public bool $group;

    /**
     * Whether the account has opted into discovery features such as the profile
     * directory.
     */
    public ?bool $discoverable = null;

    /**
     * Whether the local user has opted out of being indexed by search engines.
     */
    public ?bool $noindex = null;

    /**
     * Indicates that the profile is currently inactive and that its user has
     * moved to a new account.
     */
    public ?AccountModel $moved = null;

    /**
     * An extra attribute returned only when an account is suspended.
     */
    public ?bool $suspended = null;

    /**
     * An extra attribute returned only when an account is silenced. If true,
     * indicates that the account should be hidden behind a warning screen.
     */
    public ?bool $limited = null;

    /**
     * When the account was created.
     */
    public DateTimeInterface $created_at;

    /**
     * When the most recent status was posted.
     */
    public ?DateTimeInterface $last_status_at = null;

    /**
     * How many statuses are attached to this account.
     */
    public int $statuses_count;

    /**
     * The reported followers of this profile.
     */
    public int $followers_count;

    /**
     * The reported follows of this profile.
     */
    public int $following_count;
}
