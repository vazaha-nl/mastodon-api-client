<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents the software instance of Mastodon running on this domain.
 *
 * @see https://docs.joinmastodon.org/entities/Instance/#InstanceIcon
 */
class InstanceIconModel extends Model
{
    /**
     * The URL of this icon.
     */
    public string $src;

    /**
     * The size of this icon.
     */
    public string $size;
}
