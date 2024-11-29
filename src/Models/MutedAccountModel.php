<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a user of Mastodon and their associated profile.
 *
 * @see https://docs.joinmastodon.org/entities/Account/#MutedAccount
 */
class MutedAccountModel extends AccountModel
{
    /**
     * When a timed mute will expire, if applicable.
     */
    public ?\DateTimeInterface $mute_expires_at = null;
}
