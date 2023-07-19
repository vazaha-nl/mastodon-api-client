<?php

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Models\Account;

class LookupAccountRequest extends Request implements AccountRequest
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