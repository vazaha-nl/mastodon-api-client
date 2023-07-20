<?php

namespace Vazaha\Mastodon\Factories;

use LogicException;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Models\Application;
use Vazaha\Mastodon\Models\Contracts\ModelContract;
use Vazaha\Mastodon\Requests\Contracts\AccountRequestContract;
use Vazaha\Mastodon\Requests\Contracts\ApplicationRequestContract;
use Vazaha\Mastodon\Requests\Contracts\RequestContract;

class ModelFactory
{
	/**
	 * @param \Vazaha\Mastodon\ApiClient $apiClient
	 * @param \Vazaha\Mastodon\Requests\Contracts\RequestContract $request
	 * @param mixed[] $modelData
	 * @return \Vazaha\Mastodon\Models\Contracts\ModelContract
	 * @throws \Vazaha\Mastodon\Exceptions\BaseUriNotSetException
	 * @throws \LogicException
	 */
	public function create(ApiClient $apiClient, RequestContract $request, array $modelData): ModelContract
	{
		return $this->getModel($request)
			->fillFromArray($modelData)
			->setBaseUri($apiClient->getBaseUri());
	}

	protected function getModel(RequestContract $request): ModelContract
	{
		if ($request instanceof AccountRequestContract) {
			return new Account();
		}

		if ($request instanceof ApplicationRequestContract) {
			return new Application();
		}

		// TODO fallback to generic model?
		throw new LogicException('No model defined for this request class');
	}
}