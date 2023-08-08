<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a suggested account to follow and an associated reason for the suggestion.
 *
 * @see https://docs.joinmastodon.org/entities/Suggestion/
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
