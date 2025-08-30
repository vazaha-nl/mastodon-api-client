<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a user of Mastodon and their associated profile.
 *
 * @see https://docs.joinmastodon.org/entities/Account/#AccountRole
 */
class AccountRoleModel extends Model
{
    /**
     * The ID of the Role in the database.
     */
    public string $id;

    /**
     * The name of the role.
     */
    public string $name;

    /**
     * The hex code assigned to this role. If no hex code is assigned, the string
     * will be empty.
     */
    public string $color;
}
