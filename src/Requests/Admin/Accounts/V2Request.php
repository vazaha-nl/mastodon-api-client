<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Accounts;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\Admin\AccountResult;

/**
 * View accounts (v2).
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\AccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/accounts/#v2
 */
final class V2Request extends Request implements RequestInterface
{
    /**
     * @param ?string            $origin       filter for `local` or `remote` accounts
     * @param ?string            $status       filter for `active`, `pending`, `disabled`, `silenced`, or `suspended` accounts
     * @param ?string            $permissions  filter for accounts with `staff` permissions (users that can manage reports)
     * @param null|array<string> $role_ids     filter for users with these roles
     * @param ?string            $invited_by   lookup users invited by the account with this ID
     * @param ?string            $username     search for the given username
     * @param ?string            $display_name search for the given display name
     * @param ?string            $by_domain    filter by the given domain
     * @param ?string            $email        lookup a user with this email
     * @param ?string            $ip           lookup users with this IP address
     * @param ?string            $max_id       return results older than ID
     * @param ?string            $since_id     return results newer than ID
     * @param ?string            $min_id       return results immediately newer than ID
     * @param ?int               $limit        Maximum number of results to return. Defaults to 100 accounts. Max 200 accounts.
     */
    public function __construct(
        public ?string $origin = null,
        public ?string $status = null,
        public ?string $permissions = null,
        public ?array $role_ids = null,
        public ?string $invited_by = null,
        public ?string $username = null,
        public ?string $display_name = null,
        public ?string $by_domain = null,
        public ?string $email = null,
        public ?string $ip = null,
        public ?string $max_id = null,
        public ?string $since_id = null,
        public ?string $min_id = null,
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

    public function getResultClass(): string
    {
        return AccountResult::class;
    }
}
