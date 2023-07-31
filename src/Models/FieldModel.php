<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * @see https://link.to.docs
 */
class FieldModel extends Model
{
    /**
     * The key of a given field&#039;s key-value pair.
     */
    public string $name;

    /**
     * The value associated with the `name` key.
     */
    public string $value;

    /**
     * Timestamp of when the server verified a URL value for a rel=&quot;me&quot; link.
     */
    public ?Carbon $verified_at = null;
}
