<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a custom user role that grants permissions.
 *
 * @see https://docs.joinmastodon.org/entities/Role/
 */
class RoleModel extends Model
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

    /**
     * A bitmask that represents the sum of all permissions granted to the role.
     */
    public int $permissions;

    /**
     * Whether the role is publicly visible as a badge on user profiles.
     */
    public bool $highlighted;
}
