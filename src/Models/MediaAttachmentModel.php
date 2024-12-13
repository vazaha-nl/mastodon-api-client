<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a file or media attachment that can be added to a status.
 *
 * @see https://docs.joinmastodon.org/entities/MediaAttachment/
 */
class MediaAttachmentModel extends Model
{
    /**
     * The ID of the attachment in the database.
     */
    public string $id;

    /**
     * The type of the attachment.
     */
    public string $type;

    /**
     * The location of the original full-size attachment.
     */
    public string $url;

    /**
     * The location of a scaled-down preview of the attachment.
     */
    public string $preview_url;

    /**
     * The location of the full-size original attachment on the remote website.
     */
    public ?string $remote_url = null;

    /**
     * Metadata returned by Paperclip.
     *
     * @var list<mixed>
     */
    public array $meta;

    /**
     * Alternate text that describes what is in the media attachment, to be used
     * for the visually impaired or when media attachments do not load.
     */
    public string $description;

    /**
     * A hash computed by [the BlurHash
     * algorithm](https://github.com/woltapp/blurhash), for generating colorful
     * preview thumbnails when media has not been downloaded yet.
     */
    public string $blurhash;

    /**
     * A shorter URL for the attachment.
     */
    public string $text_url;
}
