<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Enums\HttpMethod;

trait PostRequest
{
    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array
    {
        return array_filter([
            'form_params' => $this->getFormParams(),
        ]);
    }
}
