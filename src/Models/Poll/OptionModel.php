<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Poll;

use Vazaha\Mastodon\Models\Model;

/**
 * Represents a poll attached to a status.
 *
 * @see https://docs.joinmastodon.org/entities/Poll/#Option
 */
class OptionModel extends Model
{
    /**
     * The text value of the poll option.
     */
    public string $title;

    /**
     * The total number of received votes for this option.
     */
    public ?int $votes_count = null;
}
