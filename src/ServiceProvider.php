<?php

namespace Vazaha\Mastodon;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Factories\ApiClientFactory;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->bind(ApiClient::class, function() {
            return (new ApiClientFactory)->build();
        });
    }
}
