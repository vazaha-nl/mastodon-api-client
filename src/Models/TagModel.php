<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a hashtag used within the content of a status.
 *
 * @see https://docs.joinmastodon.org/entities/Tag/
 */
class TagModel extends Model
{
    /**
     * ID of the hashtag in the database. Useful for constructing URLs for the
     * moderation tools & Admin API.
     */
    public string $id;

    /**
     * The value of the hashtag after the # sign.
     */
    public string $name;

    /**
     * A link to the hashtag on the instance.
     */
    public string $url;

    /**
     * Usage statistics for given days (typically the past week).
     *
     * @var array<array-key, mixed>
     */
    public array $history;

    /**
     * Whether the current token's authorized user is following this tag.
     */
    public ?bool $following = null;

    /**
     * Whether the current token's authorized user is featuring this tag on their
     * profile.
     */
    public ?bool $featuring = null;
}
