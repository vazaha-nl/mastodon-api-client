<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Translation;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\Translation\Poll\OptionCollection;

/**
 * Represents the result of machine translating some status content.
 *
 * @see https://docs.joinmastodon.org/entities/Translation/#Poll
 */
class PollModel extends Model
{
    /**
     * The ID of the poll.
     */
    public string $id;

    /**
     * The translated poll options.
     */
    public OptionCollection $options;
}
