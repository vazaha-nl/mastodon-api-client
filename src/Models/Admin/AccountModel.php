<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use DateTimeInterface;
use Vazaha\Mastodon\Collections\Admin\IpCollection;
use Vazaha\Mastodon\Models\AccountModel as ModelsAccountModel;
use Vazaha\Mastodon\Models\Model;
use Vazaha\Mastodon\Models\RoleModel;

/**
 * Admin-level information about a given account.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_Account/
 */
class AccountModel extends Model
{
    /**
     * The ID of the account in the database.
     */
    public string $id;

    /**
     * The username of the account.
     */
    public string $username;

    /**
     * The domain of the account, if it is remote.
     */
    public ?string $domain = null;

    /**
     * When the account was first discovered.
     */
    public DateTimeInterface $created_at;

    /**
     * The email address associated with the account.
     */
    public string $email;

    /**
     * The IP address last used to login to this account.
     */
    public ?string $ip = null;

    /**
     * All known IP addresses associated with this account.
     */
    public IpCollection $ips;

    /**
     * The locale of the account.
     */
    public string $locale;

    /**
     * The reason given when requesting an invite (for instances that require
     * manual approval of registrations).
     */
    public ?string $invite_request = null;

    /**
     * The current role of the account.
     */
    public RoleModel $role;

    /**
     * Whether the account has confirmed their email address.
     */
    public bool $confirmed;

    /**
     * Whether the account is currently approved.
     */
    public bool $approved;

    /**
     * Whether the account is currently disabled.
     */
    public bool $disabled;

    /**
     * Whether the account is currently silenced.
     */
    public bool $silenced;

    /**
     * Whether the account is currently suspended.
     */
    public bool $suspended;

    /**
     * User-level information about the account.
     */
    public ModelsAccountModel $account;

    /**
     * The ID of the [Application]({{&lt; relref &quot;entities/application&quot; &gt;}}) that
     * created this account, if applicable.
     */
    public ?string $created_by_application_id = null;

    /**
     * The ID of the [Account]({{&lt; relref &quot;entities/account&quot; &gt;}}) that invited
     * this user, if applicable.
     */
    public ?string $invited_by_account_id = null;
}
