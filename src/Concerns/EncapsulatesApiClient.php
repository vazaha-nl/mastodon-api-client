<?php

namespace Vazaha\Mastodon\Concerns;

use Vazaha\Mastodon\ApiClient;

trait EncapsulatesApiClient
{
 	protected ApiClient $apiClient;

    public function getApiClient(): ApiClient
    {
        if (!isset($this->apiClient)) {
            $this->apiClient = ApiClient::make()
            	->setDomain($this->getSourceDomain());
        }

        return $this->apiClient;
    }
}