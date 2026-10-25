<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * @see https://docs.joinmastodon.org/entities/Profile/#Field
 */
class FieldModel extends Model
{
    /**
     * The key of a given field's key-value pair. This is the raw string before
     * processing, not HTML.
     */
    public string $name;

    /**
     * The value associated with the `name` key. This is the raw string before
     * processing, not HTML.
     */
    public string $value;

    /**
     * Timestamp of when the server verified a URL value for a rel="me" link.
     */
    public ?\DateTimeInterface $verified_at = null;
}
