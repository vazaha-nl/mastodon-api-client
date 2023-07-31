<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
 */
class FilterResultModel extends Model
{
    /**
     * The filter that was matched.
     */
    public FilterModel $filter;

    /**
     * The keyword within the filter that was matched.
     */
    public ?string $keyword_matches = null;

    /**
     * The status ID within the filter that was matched.
     */
    public ?string $status_matches = null;
}
