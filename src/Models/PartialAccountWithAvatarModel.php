<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * These are stripped-down versions of [Account]({{&lt; relref &quot;entities/Account&quot; &gt;}}) that only contain what is necessary to display a list of avatars, as well as a few other useful properties. The aim is to cut back on expensive server-side serialization and reduce the network payload size e.g. of [notification groups]({{&lt; relref &quot;methods/grouped_notifications&quot; &gt;}}).
 *
 * @see https://docs.joinmastodon.org/entities/Account/#PartialAccountWithAvatar
 */
class PartialAccountWithAvatarModel extends Model
{
    /**
     * The account id.
     */
    public string $id;

    /**
     * The WebFinger account URI. Equal to `username` for local users, or
     * `username@domain` for remote users.
     */
    public string $acct;

    /**
     * The location of the user's profile page.
     */
    public ?string $url = null;

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
     * A textual description of the avatar image.
     */
    public string $avatar_description;

    /**
     * Whether the account manually approves follow requests.
     */
    public bool $locked;

    /**
     * Indicates that the account may perform automated actions, may not be
     * monitored, or identifies as a robot.
     */
    public bool $bot;
}
