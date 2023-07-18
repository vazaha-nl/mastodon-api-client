<?php

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\ApiClient;

class Model
{
    public function __construct(
        protected array $data,
        protected ?ApiClient $apiClient,
    ) {
        //
    }

    public function getProperty(string $name, $default = null)
    {
        return $this->data[$name] ?? $default;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function getApiClient(): ApiClient
    {
        if (!isset($this->apiClient)) {
            $this->apiClient = ApiClient::make();
        }

        return $this->apiClient;
    }
}
