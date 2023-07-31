<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
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
