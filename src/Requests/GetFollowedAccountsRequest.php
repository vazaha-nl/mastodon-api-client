<?php

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Models\Account;

class GetFollowedAccountsRequest extends PagedRequest
{
    protected string $accountId;

    public function __construct(string|Account $account)
    {
        if ($account instanceof Account) {
            $this->accountId = $account->getId();
            return;
        }

        $this->accountId = $account;
    }

    public function getEndpoint(): string
    {
        return sprintf('accounts/%s/following', urlencode($this->accountId));
    }

    public function getModelClass(): string
    {
        return Account::class;
    }
}
