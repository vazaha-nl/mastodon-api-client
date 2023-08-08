<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Announcement;

use Vazaha\Mastodon\Models\Model;

/**
 * Represents an announcement set by an administrator.
 *
 * @see https://docs.joinmastodon.org/entities/Announcement/#Status
 */
class StatusModel extends Model
{
    /**
     * The ID of an attached Status in the database.
     */
    public string $id;

    /**
     * The URL of an attached Status.
     */
    public string $url;
}
