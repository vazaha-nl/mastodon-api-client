<?php

declare(strict_types=1);

namespace Vazaha\Mastodon;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Vazaha\Mastodon\Factories\ApiClientFactory;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ApiClient::class, static function () {
            return (new ApiClientFactory())->build();
        });
    }
}
