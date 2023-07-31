<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Collections\AccountCollection;
use Vazaha\Mastodon\Collections\StatusCollection;
use Vazaha\Mastodon\Collections\TagCollection;

/**
 * @see https://link.to.docs
 */
class SearchModel extends Model
{
    /**
     * Accounts which match the given query.
     */
    public AccountCollection $accounts;

    /**
     * Statuses which match the given query.
     */
    public StatusCollection $statuses;

    /**
     * Hashtags which match the given query.
     */
    public TagCollection $hashtags;
}
