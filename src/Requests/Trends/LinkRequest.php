<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Trends;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Request;
use Vazaha\Mastodon\Results\Trends\LinkResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Trends\LinkResult>
 */
abstract class LinkRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return LinkResult::class;
    }
}
