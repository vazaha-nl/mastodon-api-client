<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Status;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a status posted by an account.
 *
 * @see https://docs.joinmastodon.org/entities/Status/#Tag
 */
class TagModel extends Model
{
    /**
     * The value of the hashtag after the # sign.
     */
    public string $name;

    /**
     * A link to the hashtag on the instance.
     */
    public string $url;
}
