<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View accounts (v1).
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\AccountResult>
 */
final class V1Request extends \Vazaha\Mastodon\Requests\Admin\AccountRequest implements RequestInterface
{
    public function __construct(
        /**
         * Filter for local accounts?
         */
        public ?bool $local = null,

        /**
         * Filter for remote accounts?
         */
        public ?bool $remote = null,

        /**
         * Filter for currently active accounts?
         */
        public ?bool $active = null,

        /**
         * Filter for currently pending accounts?
         */
        public ?bool $pending = null,

        /**
         * Filter for currently disabled accounts?
         */
        public ?bool $disabled = null,

        /**
         * Filter for currently silenced accounts?
         */
        public ?bool $silenced = null,

        /**
         * Filter for currently suspended accounts?
         */
        public ?bool $suspended = null,

        /**
         * Filter for accounts force-marked as sensitive?
         */
        public ?bool $sensitized = null,

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
         * Filter for staff accounts?
         */
        public ?bool $staff = null,

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
        return '/api/v1/admin/accounts';
    }

    public function getQueryParams(): array
    {
        return [
            'local' => $this->local,
            'remote' => $this->remote,
            'active' => $this->active,
            'pending' => $this->pending,
            'disabled' => $this->disabled,
            'silenced' => $this->silenced,
            'suspended' => $this->suspended,
            'sensitized' => $this->sensitized,
            'username' => $this->username,
            'display_name' => $this->display_name,
            'by_domain' => $this->by_domain,
            'email' => $this->email,
            'ip' => $this->ip,
            'staff' => $this->staff,
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
