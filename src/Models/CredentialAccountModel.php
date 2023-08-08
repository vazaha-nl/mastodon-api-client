<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a user of Mastodon and their associated profile.
 *
 * @see https://docs.joinmastodon.org/entities/Account/#CredentialAccount
 */
class CredentialAccountModel extends AccountModel
{
    /**
     * An extra attribute that contains source values to be used with API methods
     * that [verify credentials]({{< relref "methods/accounts#verify_credentials"
     * >}}) and [update credentials]({{< relref
     * "methods/accounts#update_credentials" >}}).
     *
     * @var mixed[]
     */
    public array $source;

    /**
     * The role assigned to the currently authorized user.
     */
    public RoleModel $role;
}
