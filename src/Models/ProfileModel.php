<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\FeaturedTagCollection;
use Vazaha\Mastodon\Collections\FieldCollection;

/**
 * Represents the current user&#039;s profile, with source values for all the editable fields.
 *
 * @see https://docs.joinmastodon.org/entities/Profile/
 */
class ProfileModel extends Model
{
    /**
     * The account id.
     */
    public string $id;

    /**
     * The profile's display name.
     */
    public string $display_name;

    /**
     * The profile's bio or description. Unlike for [Account]({{< relref
     * "entities/Account">}}), this is the raw unprocessed text, not the rendered
     * HTML.
     */
    public string $note;

    /**
     * Metadata about the account. Those contain the raw unprocessed names and
     * values.
     */
    public FieldCollection $fields;

    /**
     * An image icon that is shown next to statuses and in the profile. Unlike for
     * {@link https://docs.joinmastodon.org/entities/Account Account}, this is nullable and will be
     * null if the avatar is unset.
     */
    public ?string $avatar = null;

    /**
     * A static version of the avatar. Unlike for [Account]({{< relref
     * "entities/Account">}}), this is nullable and will be null if the avatar is
     * unset.
     */
    public ?string $avatar_static = null;

    /**
     * A textual description of the avatar, to be used for the visually impaired
     * or when avatars do not load.
     */
    public string $avatar_description;

    /**
     * An image banner that is shown above the profile and in profile cards.
     * Unlike for {@link https://docs.joinmastodon.org/entities/Account Account}, this is nullable
     * and will be null if the header is unset.
     */
    public ?string $header = null;

    /**
     * A static version of the header. Unlike for [Account]({{< relref
     * "entities/Account">}}), this is nullable and will be null if the header is
     * unset.
     */
    public ?string $header_static = null;

    /**
     * A textual description of the profile header, to be used for the visually
     * impaired or when avatars do not load.
     */
    public string $header_description;

    /**
     * Whether the account manually approves follow requests.
     */
    public bool $locked;

    /**
     * Indicates that the account may perform automated actions, may not be
     * monitored, or identifies as a robot. This is determined by the account's
     * `actor_type` being set to 'Application' or 'Service'.
     */
    public bool $bot;

    /**
     * Whether the user hides the contents of their follows and followers
     * collections.
     */
    public ?bool $hide_collections = null;

    /**
     * Whether the account has opted into discovery features such as the profile
     * directory.
     */
    public ?bool $discoverable = null;

    /**
     * Whether the account allows indexing by search engines.
     */
    public bool $indexable;

    /**
     * Whether the account wishes to have a “Media” tab with media attachments
     * on their profile.
     */
    public bool $show_media;

    /**
     * Whether the account wishes to have replies in the “Media” tab on their
     * profile.
     */
    public bool $show_media_replies;

    /**
     * Whether the account wishes to have a “Featured” tab on their profile.
     */
    public bool $show_featured;

    /**
     * Domains of websites allowed to credit the account.
     *
     * @var list<string>
     */
    public array $attribution_domains;

    /**
     * List of featured tags.
     */
    public FeaturedTagCollection $featured_tags;
}
