<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Poll;

use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
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
