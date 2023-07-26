<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;
use Vazaha\Mastodon\Requests\Concerns\HasPaging;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class GetFollowedAccountsRequest extends AccountRequest implements RequestInterface
{
    use HasPaging;
    use GetRequest;

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
