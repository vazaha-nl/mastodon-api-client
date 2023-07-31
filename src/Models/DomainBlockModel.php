<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a domain that is blocked by the instance.
 */
class DomainBlockModel extends Model
{
    /**
     * The domain which is blocked. This may be obfuscated or partially censored.
     */
    public string $domain;

    /**
     * The SHA256 hash digest of the domain string.
     */
    public string $digest;

    /**
     * The level to which the domain is blocked.
     */
    public string $severity;

    /**
     * An optional reason for the domain block.
     */
    public string $comment;
}
