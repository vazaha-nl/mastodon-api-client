<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Requests\Concerns\HasPaging;
use Vazaha\Mastodon\Requests\Contracts\AccountRequestContract;
use Vazaha\Mastodon\Requests\Contracts\PagedRequestContract;

class GetFollowedAccountsRequest extends Request implements AccountRequestContract, PagedRequestContract
{
    use HasPaging;
    protected string $accountId;

    public function __construct(Account|string $account)
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
