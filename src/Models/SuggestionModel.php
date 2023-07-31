<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
 */
class SuggestionModel extends Model
{
    /**
     * The reason this account is being suggested.
     */
    public string $source;

    /**
     * The account being recommended to follow.
     */
    public AccountModel $account;
}
