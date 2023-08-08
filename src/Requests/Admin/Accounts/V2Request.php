<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View accounts (v2).
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\AccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#v2
 */
final class V2Request extends \Vazaha\Mastodon\Requests\Admin\AccountRequest implements RequestInterface
{
    public function __construct(
        /**
         * Filter for `local` or `remote` accounts.
         */
        public ?string $origin = null,

        /**
         * Filter for `active`, `pending`, `disabled`, `silenced`, or `suspended`
         * accounts.
         */
        public ?string $status = null,

        /**
         * Filter for accounts with `staff` permissions (users that can manage
         * reports).
         */
        public ?string $permissions = null,

        /**
         * Filter for users with these roles.
         *
         * @var null|array<string> $role_ids
         */
        public ?array $role_ids = null,

        /**
         * Lookup users invited by the account with this ID.
         */
        public ?string $invited_by = null,

        /**
         * Search for the given username.
         */
        public ?string $username = null,

        /**
         * Search for the given display name.
         */
        public ?string $display_name = null,

        /**
         * Filter by the given domain.
         */
        public ?string $by_domain = null,

        /**
         * Lookup a user with this email.
         */
        public ?string $email = null,

        /**
         * Lookup users with this IP address.
         */
        public ?string $ip = null,

        /**
         * Return results older than ID.
         */
        public ?string $max_id = null,

        /**
         * Return results newer than ID.
         */
        public ?string $since_id = null,

        /**
         * Return results immediately newer than ID.
         */
        public ?string $min_id = null,

        /**
         * Maximum number of results to return. Defaults to 100 accounts. Max 200
         * accounts.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v2/admin/accounts';
    }

    public function getQueryParams(): array
    {
        return [
            'origin' => $this->origin,
            'status' => $this->status,
            'permissions' => $this->permissions,
            'role_ids' => $this->role_ids,
            'invited_by' => $this->invited_by,
            'username' => $this->username,
            'display_name' => $this->display_name,
            'by_domain' => $this->by_domain,
            'email' => $this->email,
            'ip' => $this->ip,
            'max_id ' => $this->max_id,
            'since_id' => $this->since_id,
            'min_id' => $this->min_id,
            'limit' => $this->limit,
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }
}
