<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\V1;

use Carbon\Carbon;
use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
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
     */
    public string $context;

    /**
     * When the filter should no longer be applied.
     */
    public ?Carbon $expires_at = null;

    /**
     * Should matching entities in home and notifications be dropped by the
     * server? See [implementation guidelines for filters]({{&lt; relref
     * &quot;api/guidelines#filters&quot; &gt;}}).
     */
    public bool $irreversible;

    /**
     * Should the filter consider word boundaries? See [implementation guidelines
     * for filters]({{&lt; relref &quot;api/guidelines#filters&quot; &gt;}}).
     */
    public bool $whole_word;
}
