<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Abstracts;

use Vazaha\Mastodon\Helpers\MultipartFormData;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\HasPaging;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Abstracts\Result>
 */
abstract class Request implements RequestInterface
{
    use HasPaging;

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array
    {
        return array_filter([
            'multipart' => (new MultipartFormData($this->getFormParams()))->toArray(),
        ]);
    }

    public function getResultClass(): string
    {
        return Result::class;
    }

    /**
     * @return array<string, string>
     */
    protected function getHeaders(): array
    {
        if (empty($this->getFormParams())) {
            return [];
        }

        return [
            'content-type' => 'multipart/form-data',
        ];
    }
}
