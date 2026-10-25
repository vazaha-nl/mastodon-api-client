<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\PreviewCardAuthorCollection;

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
     * Fediverse account of the authors of the original resource.
     */
    public PreviewCardAuthorCollection $authors;

    /**
     * The author of the original resource. Deprecated since 4.3.0, clients should
     * use `authors` instead.
     */
    public string $author_name;

    /**
     * A link to the author of the original resource. Deprecated since 4.3.0,
     * clients should use `authors` instead.
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

    /**
     * True if the linked article claims to be written by the current user without
     * the user having the article's domain in their [`attribution_domains`]({{<
     * relref "entities/Account#source[attribution_domains]" >}})). This is used
     * to prompt them to review and add the domain.
     */
    public ?bool $missing_attribution = null;

    /**
     * UNIX timestamp of publication date.
     */
    public ?string $published_at = null;
}
