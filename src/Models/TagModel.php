<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
 */
class TagModel extends Model
{
    /**
     * The value of the hashtag after the # sign.
     */
    public string $name;

    /**
     * A link to the hashtag on the instance.
     */
    public string $url;

    /**
     * Usage statistics for given days (typically the past week).
     *
     * @var mixed[]
     */
    public array $history;

    /**
     * Whether the current token&#039;s authorized user is following this tag.
     */
    public bool $following;
}
