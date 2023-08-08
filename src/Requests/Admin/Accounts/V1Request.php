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
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#v1
 */
final class V1Request extends \Vazaha\Mastodon\Requests\Admin\AccountRequest implements RequestInterface
{
    /**
     * @param ?bool   $local        Filter for local accounts?
     * @param ?bool   $remote       Filter for remote accounts?
     * @param ?bool   $active       Filter for currently active accounts?
     * @param ?bool   $pending      Filter for currently pending accounts?
     * @param ?bool   $disabled     Filter for currently disabled accounts?
     * @param ?bool   $silenced     Filter for currently silenced accounts?
     * @param ?bool   $suspended    Filter for currently suspended accounts?
     * @param ?bool   $sensitized   Filter for accounts force-marked as sensitive?
     * @param ?string $username     Search for the given username
     * @param ?string $display_name Search for the given display name
     * @param ?string $by_domain    Filter by the given domain
     * @param ?string $email        Lookup a user with this email
     * @param ?string $ip           Lookup users with this IP address
     * @param ?bool   $staff        Filter for staff accounts?
     * @param ?string $max_id       return results older than ID
     * @param ?string $since_id     return results newer than ID
     * @param ?string $min_id       return results immediately newer than ID
     * @param ?int    $limit        Maximum number of results to return. Defaults to 100 accounts. Max 200 accounts.
     */
    public function __construct(
        public ?bool $local = null,
        public ?bool $remote = null,
        public ?bool $active = null,
        public ?bool $pending = null,
        public ?bool $disabled = null,
        public ?bool $silenced = null,
        public ?bool $suspended = null,
        public ?bool $sensitized = null,
        public ?string $username = null,
        public ?string $display_name = null,
        public ?string $by_domain = null,
        public ?string $email = null,
        public ?string $ip = null,
        public ?bool $staff = null,
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
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
