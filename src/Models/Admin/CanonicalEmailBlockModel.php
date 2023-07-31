<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
 */
class CanonicalEmailBlockModel extends Model
{
    /**
     * The ID of the email block in the database.
     */
    public string $id;

    /**
     * The SHA256 hash of the canonical email address.
     */
    public string $canonical_email_hash;
}
