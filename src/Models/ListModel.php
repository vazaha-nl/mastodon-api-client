<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a list of some users that the authenticated user follows.
 *
 * @see https://docs.joinmastodon.org/entities/List/
 */
class ListModel extends Model
{
    /**
     * The internal database ID of the list.
     */
    public string $id;

    /**
     * The user-defined title of the list.
     */
    public string $title;

    /**
     * Which replies should be shown in the list.
     */
    public string $replies_policy;
}
