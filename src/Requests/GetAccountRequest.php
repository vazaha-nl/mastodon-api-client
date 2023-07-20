<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Requests\Contracts\AccountRequestContract;

class GetAccountRequest extends Request implements AccountRequestContract
{
    public function __construct(
        protected string $accountId,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('accounts/%s', urlencode($this->accountId));
    }
}
