<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
 */
class FilterKeywordModel extends Model
{
    /**
     * The ID of the FilterKeyword in the database.
     */
    public string $id;

    /**
     * The phrase to be matched against.
     */
    public string $keyword;

    /**
     * Should the filter consider word boundaries? See [implementation guidelines
     * for filters]({{&lt; relref &quot;api/guidelines#filters&quot; &gt;}}).
     */
    public bool $whole_word;
}
