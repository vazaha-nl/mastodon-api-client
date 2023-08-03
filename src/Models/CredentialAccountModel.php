<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a user of Mastodon and their associated profile.
 */
class CredentialAccountModel extends AccountModel
{
    /**
     * An extra attribute that contains source values to be used with API methods
     * that [verify credentials]({{&lt; relref &quot;methods/accounts#verify_credentials&quot;
     * &gt;}}) and [update credentials]({{&lt; relref
     * &quot;methods/accounts#update_credentials&quot; &gt;}}).
     *
     * @var mixed[]
     */
    public array $source;

    /**
     * The role assigned to the currently authorized user.
     */
    public RoleModel $role;
}
