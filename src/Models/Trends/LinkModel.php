<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Trends;

use Vazaha\Mastodon\Models\PreviewCardModel;

/**
 * This is identical to a `Link` type `PreviewCard`, with added usage history.
 *
 * @see https://docs.joinmastodon.org/entities/PreviewCard/#trends-link
 */
class LinkModel extends PreviewCardModel
{
    /**
     * Usage statistics for given days (typically the past week).
     *
     * @var array<array-key, mixed>
     */
    public array $history;
}
