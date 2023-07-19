<?php

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Models\Account;

class GetAccountRequest extends Request implements AccountRequest
{
    protected string $modelClass = Account::class;

    public function __construct(
        protected string $accountId
    ) {
        //
    }

    public function getEndpoint(): string
    {
        return sprintf('accounts/%s', urlencode($this->accountId));
    }
}
