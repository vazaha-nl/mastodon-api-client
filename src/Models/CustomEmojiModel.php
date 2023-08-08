<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a custom emoji.
 *
 * @see https://docs.joinmastodon.org/entities/CustomEmoji/
 */
class CustomEmojiModel extends Model
{
    /**
     * The name of the custom emoji.
     */
    public string $shortcode;

    /**
     * A link to the custom emoji.
     */
    public string $url;

    /**
     * A link to a static copy of the custom emoji.
     */
    public string $static_url;

    /**
     * Whether this Emoji should be visible in the picker or unlisted.
     */
    public bool $visible_in_picker;

    /**
     * Used for sorting custom emoji in the picker.
     */
    public string $category;
}
