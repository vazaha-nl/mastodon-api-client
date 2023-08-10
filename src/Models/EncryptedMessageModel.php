<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents an encrypted message.
 *
 * @see https://docs.joinmastodon.org/entities/EncryptedMessage/
 */
class EncryptedMessageModel extends Model
{
    /**
     * The ID of the EncryptedMessage in the database.
     */
    public string $id;

    /**
     * The ID of the Account that sent this message.
     */
    public string $account_id;

    /**
     * The ID of the Device that sent this message.
     */
    public string $device_id;

    /**
     * Whether the message is a pre-key message (used to establish a new session)
     * or a normally encrypted message (part of an existing session).
     */
    public string $type;

    /**
     * The encrypted message content.
     */
    public string $body;

    /**
     * An HMAC SHA-256 digest hash of the message.
     */
    public string $digest;

    /**
     * A signed value to be used when reporting the message body for its content.
     */
    public string $message_franking;

    /**
     * A timestamp for when the message was created.
     */
    public DateTimeInterface $created_at;
}
