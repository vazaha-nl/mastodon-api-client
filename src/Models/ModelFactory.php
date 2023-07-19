<?php

namespace Vazaha\Mastodon\Models;

use LogicException;
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