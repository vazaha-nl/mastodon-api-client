<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a rich preview card that is generated using OpenGraph tags from a URL.
 *
 * @see https://docs.joinmastodon.org/entities/PreviewCard/
 */
class PreviewCardModel extends Model
{
    /**
     * Location of linked resource.
     */
    public string $url;

    /**
     * Title of linked resource.
     */
    public string $title;

    /**
     * Description of preview.
     */
    public string $description;

    /**
     * The type of the preview card.
     */
    public string $type;

    /**
     * The author of the original resource.
     */
    public string $author_name;

    /**
     * A link to the author of the original resource.
     */
    public string $author_url;

    /**
     * The provider of the original resource.
     */
    public string $provider_name;

    /**
     * A link to the provider of the original resource.
     */
    public string $provider_url;

    /**
     * HTML to be used for generating the preview card.
     */
    public string $html;

    /**
     * Width of preview, in pixels.
     */
    public int $width;

    /**
     * Height of preview, in pixels.
     */
    public int $height;

    /**
     * Preview thumbnail.
     */
    public ?string $image = null;

    /**
     * Used for photo embeds, instead of custom `html`.
     */
    public string $embed_url;

    /**
     * A hash computed by [the BlurHash
     * algorithm](https://github.com/woltapp/blurhash), for generating colorful
     * preview thumbnails when media has not been downloaded yet.
     */
    public ?string $blurhash = null;
}
