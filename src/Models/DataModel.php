<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
 */
class DataModel extends Model
{
    /**
     * The unique keystring for this data item.
     */
    public string $key;

    /**
     * A human-readable key for this data item.
     */
    public string $human_key;

    /**
     * The value for this data item.
     */
    public string $value;

    /**
     * The units associated with this data item&#039;s value, if applicable.
     */
    public string $unit;

    /**
     * A human-readable formatted value for this data item.
     */
    public string $human_value;
}
