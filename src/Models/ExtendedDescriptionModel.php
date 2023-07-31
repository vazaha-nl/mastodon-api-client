<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * @see https://link.to.docs
 */
class ExtendedDescriptionModel extends Model
{
    /**
     * A timestamp of when the extended description was last updated.
     */
    public Carbon $updated_at;

    /**
     * The rendered HTML content of the extended description.
     */
    public string $content;
}
