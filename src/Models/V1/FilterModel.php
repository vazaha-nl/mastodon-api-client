<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\V1;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a user-defined filter for determining which statuses should not be shown to the user. Contains a single keyword or phrase.
 *
 * @see https://docs.joinmastodon.org/entities/V1_Filter/
 */
class FilterModel extends Model
{
    /**
     * The ID of the filter in the database.
     */
    public string $id;

    /**
     * The text to be filtered.
     */
    public string $phrase;

    /**
     * The contexts in which the filter should be applied.
     *
     * @var list<string>
     */
    public array $context;

    /**
     * When the filter should no longer be applied.
     */
    public ?\DateTimeInterface $expires_at = null;

    /**
     * Should matching entities in home and notifications be dropped by the
     * server? See [implementation guidelines for filters]({{< relref
     * "api/guidelines#filters" >}}).
     */
    public bool $irreversible;

    /**
     * Should the filter consider word boundaries? See [implementation guidelines
     * for filters]({{< relref "api/guidelines#filters" >}}).
     */
    public bool $whole_word;
}
