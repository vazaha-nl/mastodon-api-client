<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Carbon\Carbon;
use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
 */
class IpBlockModel extends Model
{
    /**
     * The ID of the DomainBlock in the database.
     */
    public string $id;

    /**
     * The IP address range that is not allowed to federate.
     */
    public string $ip;

    /**
     * The associated policy with this IP block.
     */
    public string $severity;

    /**
     * The recorded reason for this IP block.
     */
    public string $comment;

    /**
     * When the IP block was created.
     */
    public Carbon $created_at;

    /**
     * When the IP block will expire.
     */
    public ?Carbon $expires_at = null;
}
