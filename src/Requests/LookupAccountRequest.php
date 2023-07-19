<?php

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Requests\Contracts\AccountRequestContract;

class LookupAccountRequest extends Request implements AccountRequestContract
{
	public function __construct(
		protected string $username
	) {
		//
	}

    public function getEndpoint(): string
    {
    	return sprintf('accounts/lookup');
    }

    public function getQuery(): array
    {
    	return [
    		'acct' => $this->username,
    	];
    }
}