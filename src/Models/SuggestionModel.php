<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

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
     * A list of reasons this account is being suggested. This replaces `source`.
     *
     * @var list<string>
     */
    public array $sources;

    /**
     * The account being recommended to follow.
     */
    public AccountModel $account;
}
