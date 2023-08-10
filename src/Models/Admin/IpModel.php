<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents an IP address associated with a user.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_Ip/
 */
class IpModel extends Model
{
    /**
     * The IP address.
     */
    public string $ip;

    /**
     * The timestamp of when the IP address was last used for this account.
     */
    public DateTimeInterface $used_at;
}
