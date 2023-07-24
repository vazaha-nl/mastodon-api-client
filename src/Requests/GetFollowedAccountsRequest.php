<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Requests\Concerns\CreatesAccountModels;
use Vazaha\Mastodon\Requests\Concerns\HasPaging;
use Vazaha\Mastodon\Interfaces\PagedRequestInterface;

class GetFollowedAccountsRequest extends GetRequest implements PagedRequestInterface
{
    use HasPaging;
    use CreatesAccountModels;

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
        return sprintf('/api/v1/accounts/%s/following', urlencode($this->accountId));
    }

    public function getQueryParams(): array
    {
        return [];
    }
}
