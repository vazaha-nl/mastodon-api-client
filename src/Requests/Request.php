<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\HasPaging;
use Vazaha\Mastodon\Results\Result;
use Vazaha\Mastodon\Support\MultipartFormData;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Result>
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
