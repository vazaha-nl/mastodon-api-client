<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\Admin\AccountModel;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Proxies\Proxy;
use Vazaha\Mastodon\Requests\Admin\Accounts\ActionRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\ApproveRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\DeleteRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\EnableRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\GetOneRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\RejectRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\UnsensitiveRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\UnsilenceRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\UnsuspendRequest;
use Vazaha\Mastodon\Requests\Admin\Accounts\V1Request;
use Vazaha\Mastodon\Requests\Admin\Accounts\V2Request;
use Vazaha\Mastodon\Results\Admin\AccountResult;

class AccountsProxy extends Proxy
{
    /**
     * Perform an action against an account.
     *
     * @param string  $id                      the ID of the Account in the database
     * @param string  $type                    the type of action to be taken: `none`, `sensitive`, `disable`, `silence`, or `suspend`
     * @param ?string $report_id               the ID of an associated report that caused this action to be taken
     * @param ?string $warning_preset_id       the ID of a preset warning
     * @param ?string $text                    additional clarification for why this action was taken
     * @param ?bool   $send_email_notification Should an email be sent to the user with the above information?
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#action
     */
    public function action(
        string $id,
        string $type,
        ?string $report_id = null,
        ?string $warning_preset_id = null,
        ?string $text = null,
        ?bool $send_email_notification = null,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new ActionRequest(
            $id,
            $type,
            $report_id,
            $warning_preset_id,
            $text,
            $send_email_notification,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Approve a pending account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#approve
     */
    public function approve(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new ApproveRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Delete an account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#delete
     */
    public function delete(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new DeleteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Enable a currently disabled account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#enable
     */
    public function enable(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new EnableRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View a specific account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#get-one
     */
    public function getOne(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new GetOneRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Reject a pending account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#reject
     */
    public function reject(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new RejectRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unmark an account as sensitive.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#unsensitive
     */
    public function unsensitive(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new UnsensitiveRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unsilence an account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#unsilence
     */
    public function unsilence(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new UnsilenceRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unsuspend an account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#unsuspend
     */
    public function unsuspend(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new UnsuspendRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\Admin\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View accounts (v1).
     *
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
     *
     * @return \Vazaha\Mastodon\Results\Admin\AccountResult<array-key,\Vazaha\Mastodon\Models\Admin\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#v1
     */
    public function v1(
        ?bool $local = null,
        ?bool $remote = null,
        ?bool $active = null,
        ?bool $pending = null,
        ?bool $disabled = null,
        ?bool $silenced = null,
        ?bool $suspended = null,
        ?bool $sensitized = null,
        ?string $username = null,
        ?string $display_name = null,
        ?string $by_domain = null,
        ?string $email = null,
        ?string $ip = null,
        ?bool $staff = null,
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\Admin\AccountResult<array-key,\Vazaha\Mastodon\Models\Admin\AccountModel> */
        $models = $this->apiClient
            ->send(new V1Request(
                $local,
                $remote,
                $active,
                $pending,
                $disabled,
                $silenced,
                $suspended,
                $sensitized,
                $username,
                $display_name,
                $by_domain,
                $email,
                $ip,
                $staff,
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }

    /**
     * View accounts (v2).
     *
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
     *
     * @return \Vazaha\Mastodon\Results\Admin\AccountResult<array-key,\Vazaha\Mastodon\Models\Admin\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#v2
     */
    public function v2(
        ?string $origin = null,
        ?string $status = null,
        ?string $permissions = null,
        ?array $role_ids = null,
        ?string $invited_by = null,
        ?string $username = null,
        ?string $display_name = null,
        ?string $by_domain = null,
        ?string $email = null,
        ?string $ip = null,
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\Admin\AccountResult<array-key,\Vazaha\Mastodon\Models\Admin\AccountModel> */
        $models = $this->apiClient
            ->send(new V2Request(
                $origin,
                $status,
                $permissions,
                $role_ids,
                $invited_by,
                $username,
                $display_name,
                $by_domain,
                $email,
                $ip,
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }
}
