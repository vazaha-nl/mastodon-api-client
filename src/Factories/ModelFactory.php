<?php

namespace Vazaha\Mastodon\Factories;

use LogicException;
use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Models\Model;
use Vazaha\Mastodon\Requests\AccountRequest;
use Vazaha\Mastodon\Requests\Request;

class ModelFactory
{
	public function create(Request $request): Model
	{
		if ($request instanceof AccountRequest) {
			return new Account();
		}

		throw new LogicException('unknown request class!');
	}
}