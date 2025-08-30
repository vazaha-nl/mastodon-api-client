<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Summary of a moderation or block event that caused follow relationships to be severed.
 *
 * @see https://docs.joinmastodon.org/entities/RelationshipSeveranceEvent/
 */
class RelationshipSeveranceEventModel extends Model
{
    /**
     * The ID of the relationship severance event in the database.
     */
    public string $id;

    /**
     * Type of event.
     */
    public string $type;

    /**
     * Whether the list of severed relationships is unavailable because the
     * underlying issue has been purged.
     */
    public bool $purged;

    /**
     * Name of the target of the moderation/block event. This is either a domain
     * name or a user handle, depending on the event type.
     */
    public string $target_name;

    /**
     * Number of followers that were removed as result of the event.
     */
    public int $followers_count;

    /**
     * Number of accounts the user stopped following as result of the event.
     */
    public int $following_count;

    /**
     * When the event took place.
     */
    public \DateTimeInterface $created_at;
}
