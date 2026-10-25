<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * The state of an account.
 *
 * @see https://docs.joinmastodon.org/entities/Account/#AccountState
 */
class AccountStateModel extends AccountModel
{
    /**
     * Whether the current account is fully usable.
     */
    public bool $functional;

    /**
     * Whether the current account has confirmed their email address.
     */
    public bool $confirmed;

    /**
     * Whether the current account has been approved by a moderator.
     */
    public bool $approved;

    /**
     * Localized string explaining why the account is not functional, if
     * applicable.
     */
    public ?string $error = null;

    /**
     * Reason why the account is not functional, if applicable. Expressed as a
     * code. Additional reasons can be added in the future.
     */
    public ?string $error_code = null;
}
