<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents an IP address range that cannot be used to sign up.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_IpBlock/
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
    public \DateTimeInterface $created_at;

    /**
     * When the IP block will expire.
     */
    public ?\DateTimeInterface $expires_at = null;
}
