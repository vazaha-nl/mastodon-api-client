<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
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
