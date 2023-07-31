<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Trends;

use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
 */
class LinkModel extends Model
{
    /**
     * Usage statistics for given days (typically the past week).
     *
     * @var mixed[]
     */
    public array $history;
}
