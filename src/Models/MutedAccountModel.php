<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * Represents a user of Mastodon and their associated profile.
 */
class MutedAccountModel extends Model
{
    /**
     * When a timed mute will expire, if applicable.
     */
    public ?Carbon $mute_expires_at = null;
}
