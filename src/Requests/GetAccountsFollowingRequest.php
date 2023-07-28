<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;
use Vazaha\Mastodon\Requests\Concerns\HasPaging;

/**
 * @see https://docs.joinmastodon.org/methods/accounts/#following
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 */
final class GetAccountsFollowingRequest extends AccountRequest implements RequestInterface
{
    use HasPaging;
    use GetRequest;

    protected string $accountId;

    public function __construct(AccountModel|string $account)
    {
        if ($account instanceof AccountModel) {
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
