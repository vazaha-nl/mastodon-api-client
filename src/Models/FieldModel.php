<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use DateTimeInterface;

/**
 * Represents a user of Mastodon and their associated profile.
 *
 * @see https://docs.joinmastodon.org/entities/Account/#Field
 */
class FieldModel extends Model
{
    /**
     * The key of a given field&#039;s key-value pair.
     */
    public string $name;

    /**
     * The value associated with the `name` key.
     */
    public string $value;

    /**
     * Timestamp of when the server verified a URL value for a rel=&quot;me&quot; link.
     */
    public ?DateTimeInterface $verified_at = null;
}
