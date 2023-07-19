<?php

namespace Vazaha\Mastodon\Factories;

use LogicException;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Models\Model;
use Vazaha\Mastodon\Requests\AccountRequest;
use Vazaha\Mastodon\Requests\Request;

class ModelFactory
{
	/**
	 * @param \Vazaha\Mastodon\ApiClient $apiClient
	 * @param \Vazaha\Mastodon\Requests\Request $request
	 * @param mixed[] $modelData
	 * @return \Vazaha\Mastodon\Models\Model
	 * @throws \Vazaha\Mastodon\Exceptions\DomainNotSetException
	 * @throws \LogicException
	 */
	public function create(ApiClient $apiClient, Request $request, array $modelData): Model
	{
		if ($request instanceof AccountRequest) {
			return (new Account())
				->setSourceDomain($apiClient->getDomain())
				->fillFromArray($modelData);
		}

		throw new LogicException('unknown request class!');
	}
}