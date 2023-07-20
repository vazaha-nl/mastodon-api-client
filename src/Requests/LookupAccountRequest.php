<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Requests\Contracts\AccountRequestContract;

class LookupAccountRequest extends Request implements AccountRequestContract
{
    public function __construct(
        protected string $acct,
    ) {
    }

    public function getEndpoint(): string
    {
        return 'accounts/lookup';
    }

    public function getQueryParams(): array
    {
        return [
            'acct' => $this->acct,
        ];
    }
}
