<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a filter whose keywords matched a given status.
 */
class FilterResultModel extends Model
{
    /**
     * The filter that was matched.
     */
    public FilterModel $filter;

    /**
     * The keyword within the filter that was matched.
     *
     * @var null|array<string>
     */
    public ?array $keyword_matches = null;

    /**
     * The status ID within the filter that was matched.
     */
    public ?string $status_matches = null;
}
