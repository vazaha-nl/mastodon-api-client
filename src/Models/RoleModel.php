<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
 */
class RoleModel extends Model
{
    /**
     * The ID of the Role in the database.
     */
    public int $id;

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
