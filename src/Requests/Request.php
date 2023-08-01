<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\HasPaging;
use Vazaha\Mastodon\Results\Result;

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
            'form_params' => $this->getFormParams(),
        ]);
    }

    public function getResultClass(): string
    {
        return Result::class;
    }
}
