<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * @see https://link.to.docs
 */
class MutedAccountModel extends Model
{
    /**
     * When a timed mute will expire, if applicable.
     */
    public ?Carbon $mute_expires_at = null;
}
