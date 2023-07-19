<?php

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Models\Account;

class GetFollowedAccountsRequest extends PagedRequest implements AccountRequest
{
    protected string $accountId;

    public function __construct(string|Account $account)
    {
        if ($account instanceof Account) {
            $this->accountId = $account->id;
            return;
        }

        $this->accountId = $account;
    }

    public function getEndpoint(): string
    {
        return sprintf('accounts/%s/following', urlencode($this->accountId));
    }
}
