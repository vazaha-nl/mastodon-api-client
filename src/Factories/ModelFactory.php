<?php

namespace Vazaha\Mastodon\Factories;

use LogicException;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Models\Contracts\ModelContract;
use Vazaha\Mastodon\Requests\Contracts\AccountRequestContract;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;

class ModelFactory
{
	/**
	 * @param \Vazaha\Mastodon\ApiClient $apiClient
	 * @param \Vazaha\Mastodon\Requests\Contracts\RequestContract $request
	 * @param mixed[] $modelData
	 * @return \Vazaha\Mastodon\Models\Contracts\ModelContract
	 * @throws \Vazaha\Mastodon\Exceptions\DomainNotSetException
	 * @throws \LogicException
	 */
	public function create(ApiClient $apiClient, RequestContract $request, array $modelData): ModelContract
	{
		if ($request instanceof AccountRequestContract) {
			return (new Account())
				->setSourceDomain($apiClient->getDomain())
				->fillFromArray($modelData);
		}

		throw new LogicException('request class not defined in factory');
	}
}